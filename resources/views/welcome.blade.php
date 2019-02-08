<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Home' }} | Revenger Tours</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans font-normal antialiased text-black leading-normal overflow-x-hidden text-base">
<div id="app" class="flex flex-col">
    @include('partials.nav')
    @include('partials.slider')
    @include('partials.featured.tours')
    @include('partials.footer')
</div>
@yield('javascript')
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
