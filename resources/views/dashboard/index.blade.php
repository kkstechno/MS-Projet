@extends('layouts.app')
@section('title')
    Tableau de bord
@endsection

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ mix('assets/style/css/dashboard.css') }}">
@endsection

@section('content')
    <section class="section">
        @include('flash::message')
        <div class="section-header">
            <h1>{{ __('Tableau de bord') }}</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <h5>{{ __('Rapport utilisateur') }} <span
                                                class="text-muted font-size-15px hours"></span></h5>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="row justify-content-end">
                                        @can('manage_users')
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4 colUsers">
                                                {{ Form::select('users', $users, Auth::id(), ['id' => 'userId','class'=>'user_filter_dropdown']) }}
                                            </div>
                                        @endcan
                                            <div class="d-none">
                                                {{ Form::select('users', $users, Auth::id(), ['id' => 'userId','class'=>'user_filter_dropdown']) }}
                                            </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xl-4">
                                            <div id="time_range" class="time_range time_range_width w-100">
                                                <i class="far fa-calendar-alt"
                                                   aria-hidden="true"></i>&nbsp;&nbsp;<span></span> <b
                                                        class="caret"></b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="work-report-container" class="pt-2">
                                <canvas id="daily-work-report"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @can('manage_users')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-header flex-wrap">
                                    <h5>{{ __('Rapport de travail quotidien') }}</h5>
                                    <div id="rightData">
                                        <div id="developers-report-date-picker" class="time_range">
                                            <i class="far fa-calendar-alt" aria-hidden="true"></i>&nbsp;&nbsp;
                                            <span></span> <b class="caret"></b>
                                        </div>
                                    </div>
                                </div>
                                <div id="developers-daily-work-report-container" class="pt-2">
                                    <canvas id="developers-daily-work-report"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-header">
                                    <h5>{{ __('Tâches ouvertes') }}</h5>
                                </div>
                                <div id="users-open-tasks-container" class="pt-2">
                                    <canvas id="users-open-tasks"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(getLoggedInUser()->hasRole('Admin'))
                <!-- Projects Status Chart -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="page-header">
                                        <h5>{{ __('Status du projet') }}</h5>
                                    </div>
                                    <div id="users-project-status-container" class="pt-2">
                                        <canvas id="users-project-status"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="page-header">
                                        <h5>{{ __('Etat de la facture') }}</h5>
                                    </div>
                                    <div id="client-invoices-container" class="pt-2">
                                        <canvas id="client-invoices"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endcan
        </div>
    </section>
@endsection

@section('page_js')
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/daterangepicker.js') }}"></script>
@endsection

@section('scripts')
    <script>
        let noRecordFoundMessage = "{{__('Aucun enregistrement trouvé')}}";
        @if(getLoggedInUser()->hasRole('Admin'))
        let projectStatusUrl = "{{ route('users-project-status') }}";
        let clientInvoiceUrl = "{{ route('client-invoices-status') }}";
        @endif
    </script>
    <script src="{{ mix('assets/js/dashboard/dashboard.js') }}"></script>
    @can('manage_users')
        <script src="{{ mix('assets/js/dashboard/developers-daily-report.js') }}"></script>
        <script src="{{ mix('assets/js/dashboard/users-open-tasks.js') }}"></script>
        @if(getLoggedInUser()->hasRole('Admin'))
            <script src="{{ mix('assets/js/dashboard/users-project-status.js') }}"></script>
            <script src="{{ mix('assets/js/dashboard/clients-invoice-status.js') }}"></script>
        @endif
    @endcan
@endsection
