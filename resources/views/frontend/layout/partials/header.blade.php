<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from demo.hasthemes.com/pallas-preview/pallas/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Sep 2020 04:18:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend')}}/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/style.css">

    @stack('styles')
</head>

<body>
