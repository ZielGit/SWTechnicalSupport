<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        
	    <!-- Favicon icon-->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dash-ui/images/favicon/favicon.ico') }}">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        {{-- Bootstrap Icons --}}
        <link rel="stylesheet" href="{{ asset('dash-ui/plugins/bootstrap-icons/font/bootstrap-icons.css') }}">
        {{-- Normalize Css --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
        {{-- Dash-Ui CSS --}}
        <link rel="stylesheet" href="{{ asset('dash-ui/css/theme.css') }}">
        
        @stack('styles')

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        {{-- JQuery --}}
        <script src="{{ asset('dash-ui/plugins/jquery/dist/jquery.min.js') }}"></script>
        {{-- Bootstrap --}}
        <script src="{{ asset('dash-ui/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        {{-- JQuery Slimcroll --}}
        <script src="{{ asset('dash-ui/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        {{-- Feather Icons --}}
        <script src="{{ asset('dash-ui/plugins/feather-icons/dist/feather.min.js') }}"></script>
    </head>
    <body>
        <div id="db-wrapper">
            <!-- Sidebar -->
            @include('layouts.sidebar')
            <!-- Page content -->
            <div id="page-content">
                @include('layouts.navbar')
                <!-- Container fluid -->
                @yield('content')
            </div>
        </div>
        {{-- <x-jet-banner /> --}}
        {{-- @livewire('navigation-menu') --}}

        <!-- Page Heading -->
        {{-- <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header> --}}

        <!-- Page Content -->
        {{-- <main class="container my-5">
            {{ $slot }}
        </main> --}}
        
        @stack('modals')

        @livewireScripts
        <!-- Theme JS -->
        <script src="{{ asset('dash-ui/js/main.js') }}"></script>
        <script src="{{ asset('dash-ui/js/feather.js') }}"></script>
        <!-- End custom js for this page-->
        
        @stack('scripts')

    </body>
</html>
