<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
   
</head>
<body>
    <div id="app" class="w-100 h-100">
        <add-button-component></add-button-component>
        <add-modal-component></add-modal-component>
        <edit-modal-component></edit-modal-component>
        @yield('content')
    </div>

    <script src="https://use.fontawesome.com/86251c9658.js"></script>
</body>
</html>
