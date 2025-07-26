<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book List Manager</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

       
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            
    </head>
    <body class="bg-gray-200">
        <nav class="flex justify-between bg-white p-6 mb-5">
            <h1 class="text-3xl font-bold"><a href="/">Book List Manager</a></h1>
            <ul class="flex item-center ">
                <li class="px-2"><a href="{{ route('addbook') }}">Add Book</a></li>
                <li class="px-2"><a href="{{ route('viewbook') }}">View Book(s)</a></li>
            </ul>
        </nav>

        @yield('content')
    </body>
</html>
