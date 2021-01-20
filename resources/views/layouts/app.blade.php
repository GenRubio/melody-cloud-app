<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    @yield('css')
    @livewireStyles
    <script src="{{ asset(mix('js/app.js')) }}"></script>
    @livewireScripts
    <script src="https://kit.fontawesome.com/b6add834b6.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    @yield('navBar')
    @yield('content')
    @yield('scripts')
</body>
</html>