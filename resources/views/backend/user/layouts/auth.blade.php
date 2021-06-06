<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('public/backend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/fonts/linearicons/css/linearicons.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/backend/css/styles.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body class="bg-primary">

<div id="layoutAuthentication">

    <div id="layoutAuthentication_content">

        <main>
            @yield('content')
        </main>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
@stack('scripts')
</body>
</html>

