<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>honey</title>

    {{-- links --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/fontawesome/all.css') }}">
    <script src="{{ asset('asset/js/fontawesome/all.js') }}"></script>
</head>
<body>
    <div id="app">
        <x-flash-msg>
            @yield('content')
        </x-flash-msg>
    </div>
