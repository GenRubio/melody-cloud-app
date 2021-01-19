<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    <script src="{{ url('/js/main.js') }}"></script>
    @livewireScripts
    <title>Home</title>
</head>
<body>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    @yield('navBar')
    @yield('content')
</body>
</html>