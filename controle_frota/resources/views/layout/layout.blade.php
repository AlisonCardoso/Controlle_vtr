<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Controle de frota') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


   
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
 <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>


    <div class="container">

        @yield('main-content')




        @stack('js')

    </div>
</body>
</html>
