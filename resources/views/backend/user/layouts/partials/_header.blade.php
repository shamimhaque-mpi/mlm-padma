<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!-- Fonts -->
    <link href="{{ asset('public/backend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/fonts/linearicons/css/linearicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/fonts/themify/css/themify-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/fonts/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
      <link href="{{ asset('public/backend/fonts/materials/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/backend/css/styles.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body class="sb-nav-fixed">
