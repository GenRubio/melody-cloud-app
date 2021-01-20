<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    <script src="{{ url('/js/main.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    @yield('css')
    @livewireScripts
    <title>Home</title>
</head>
<body>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    @yield('navBar')
    @yield('content')
    @yield('scripts')
</body>
</html>