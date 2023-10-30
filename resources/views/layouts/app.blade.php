<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets/')}}"
    data-template="vertical-menu-template-free">
    <head>
        {{-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

        <meta charset="utf-8">
        <title>TAZANA COFFEE SYSTEM</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon/icon-fav.ico')}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

        <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('assets/vendor/fonts/boxicons.css')}}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{asset('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{asset('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{asset('assets/js/config.js')}}"></script>

    
        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css"> --}}

     
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        
        
        
        @include('layouts.navigation')
    

        <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets/vendor/js/menu.js')}}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

        <!-- Main JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script src="{{asset('assets/js/form.js')}}"></script>

        <!-- Page JS -->
        <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
    </body>
</html>
