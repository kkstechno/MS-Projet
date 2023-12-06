<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\AppBaseController;
use App\Models\UserNotification;
use App\Repositories\DashboardRepository;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class DashboardController extends AppBaseController
{
    /**
     * @var DashboardRepository
     */
    private $dashboardRepository;

    public function __construct(DashboardRepository $dashboardRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('client_panel.dashboard.index');
    }

    /**
     * @return JsonResponse
     */
    public function projectStatus()
    {
        $data = $this->dashboardRepository->getClientProjectStatus();

        return $this->sendResponse($data, 'Project Status retrieved successfully.');
    }

    /**
     * @return JsonResponse
     */
    public function getClientInvoices()
    {
        $data = $this->dashboardRepository->getClientAssignInvoices();

        return $this->sendResponse($data, 'Project Status retrieved successfully.');
    }

    /**
     * @return JsonResponse
     */
    public function getNotifications()
    {
        $notifications = UserNotification::whereUserId(\Auth::id())->where('read_at',
            null)->orderByDesc('created_at')->get();

        return $this->sendResponse($notifications, 'Notification retrieved successfully');
    }

    /**
     * @param  UserNotification  $notification
     * @return JsonResponse
     */
    public function readNotification(UserNotification $notification)
    {
        $notification->read_at = Carbon::now();
        $notification->save();

        return $this->sendSuccess('Notification read successfully.');
    }

    /**
     * @return JsonResponse
     */
    public function readAllNotification()
    {
        UserNotification::whereReadAt(null)->where('user_id',
            getLoggedInUserId())->update(['read_at' => Carbon::now()]);

        return $this->sendSuccess('All Notification read successfully.');
    }
}
