<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login Screen - Spark Admin Premium Bootstrap 5 Admin Dashboard Template">
        <meta name="author" content="Spark Admin Team">
        <link rel="icon" type="image/png" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <title>{{ config('app.name') }} | {{ $title }}</title>
        @stack('style')
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        {{ $slot }}

        <!-- Local Bootstrap bundle -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        
        <!-- Custom Authentication interactions script -->
        <script src="{{ asset('assets/js/auth.js') }}"></script>
        @stack('script')
        @livewireScripts
    </body>
</html>