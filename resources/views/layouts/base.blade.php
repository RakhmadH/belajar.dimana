<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Belajar Dimana</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=bree-serif:400" rel="stylesheet" />

        <!-- Styles -->

         @vite('resources/css/app.css')
    </head>
    <body class="@yield('requirementBody')">
        @hasSection('optionNav')
        @else
        @include('layouts.navbarLanding')
        @endif
        @yield('content')
    </body>
