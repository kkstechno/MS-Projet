<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>404 Not Found | {{ config('app.name') }}</title>

    <!-- Bootstrap 4.1.1 -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <link href="{{mix('assets/style/css/style.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Ionicons -->
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons/css/simple-line-icons.css') }}">
</head>
<body>
<div class="container con-404">
    <div class="row justify-content-md-center my-auto d-block">
        <div class="col-md-12 mt-5">
            <img src="{{ asset('assets/img/404-error.png') }}" class="img-fluid img-404 mx-auto d-block">
        </div>
        <div class="col-md-12 text-center error-page-404">
            <h2>Opps! Something's missing...</h2>
            <p class="not-found-subtitle">The page you are looking for doesn't exists / isn't available / was loading
                incorrectly.</p>
            <a class="btn btn-primary mt-3" href="#" onclick="window.history.back();">Back to Previous Page</a>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('web/js/scripts.js') }}"></script>
</body>
</html>
