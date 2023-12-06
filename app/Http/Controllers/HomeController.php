<?php

namespace App\Http\Controllers;

use App\Models\TimeEntry;
use App\Repositories\DashboardRepository;
use App\Repositories\UserRepository;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;

/**
 * Class HomeController.
 */
class HomeController extends AppBaseController
{
    /** @var DashboardRepository */
    private $dashboardRepo;

    /** @var UserRepository */
    private $userRepository;

    /**
     * HomeController constructor.
     *
     * @param  DashboardRepository  $dashboardRepository
     * @param  UserRepository  $userRepository
     */
    public function __construct(DashboardRepository $dashboardRepository, UserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->dashboardRepo = $dashboardRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->getUserList();

        return view('dashboard.index', compact('users'));
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function workReport(Request $request)
    {
        if (! authUserHasPermission('manage_users')) {
            $request->request->set('user_id', Auth::id());
        }
        $data = $this->dashboardRepo->getWorkReport($request->all());

        return $this->sendResponse($data, 'Rapport personnalisé récupéré avec succès.');
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function developerWorkReport(Request $request)
    {
        $data = $this->dashboardRepo->getDeveloperWorkReport($request->all());

        return $this->sendResponse($data, 'Rapport de travail quotidien récupéré avec succès.');
    }

    /**
     * @return JsonResponse
     */
    public function userOpenTasks()
    {
        $data = $this->dashboardRepo->getUserOpenTasks();

        return $this->sendResponse($data, 'Tâche ouverte récupérée avec succès.');
    }

    /**
     * @return JsonResponse
     */
    public function userProjectStatus()
    {
        $data = $this->dashboardRepo->getUsersProjectStatus();

        return $this->sendResponse($data, 'Statut du projet récupéré avec succès.');
    }

    /**
     * @return JsonResponse
     */
    public function clientInvoiceStatus()
    {
        $data = $this->dashboardRepo->getClientInvoicesStatus();

        return $this->sendResponse($data, 'Statut de la facture récupéré avec succès.');
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function getTotalHours(Request $request)
    {
        $input = $request->all();
        $userId = ! empty($input['user_id']) ? $input['user_id'] : getLoggedInUserId();
        $startDate = Carbon::parse($input['start_date'])->format('d-m-Y H:i:s');
        $endDate = Carbon::parse($input['end_date'])->format('d-m-Y H:i:s');
        $timeEntry = TimeEntry::with('task.project')
            ->ofUser($userId)
            ->whereBetween('start_time', [$startDate, $endDate])
            ->get();
        $totalHrs = [];
        foreach ($timeEntry as $entry) {
            array_push($totalHrs, $entry->duration);
        }
        $minutes = array_sum($totalHrs);
        $hours = $this->getDurationTime($minutes);

        return $this->sendResponse($hours, 'success');
    }

    /**
     * @param  int  $minutes
     * @return string
     */
    public function getDurationTime($minutes)
    {
        if ($minutes == 0) {
            return '0 H';
        }

        if ($minutes < 60) {
            return $minutes.' min';
        }

        $hour = floor($minutes / 60);
        $min = (int) ($minutes - $hour * 60);
        if ($min === 0) {
            return $hour.' H';
        }

        return $hour.' H '.$min.' min';
    }

    /**
     * @return JsonResponse
     */
    public function trackerNotification()
    {
        Artisan::call('infyom:tracker-notification', ['userName' => Auth::user()->name]);

        return $this->sendSuccess('Votre notification a été envoyée avec succès');
    }
}
