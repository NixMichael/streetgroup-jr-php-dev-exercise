<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Autour+One&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            h1 {
                font-family: 'Autour One', cursive;
            }
        </style>
    </head>
    <body class="bg-gray-100">
        
        <div class="container lg:px-24 mt-8 mx-auto">
            <header class="flex flex-col lg:flex-row justify-between items-center mb-12">
                <h1 class="text-4xl md:text-5xl lg:text-6xl text-center">The Dog House</h1>
                <div class="mt-10 lg:mt-0">
                @if(request()->is('pictures/create'))
                    <a href="/" class="mx-auto my-3 bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded">Home</a>
                @else
                    <a href="{{ route('pictures.create') }}" class="mx-auto my-3 bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded">Add your own dog</a>
                @endif
                </div>
            </header>

            @yield('content')
        </div>
    </body>
</html>
