<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
    </head>
    <body class="bg-blue-800">
        <div class=" relative antialiased text-gray-100 w-full h-screen">
            @if($errors->any())
            <div class="absolute left-0 top-0  px-2 py-2  w-1/5">
                @foreach($errors->all() as $error)
                    <div class="bg-gray-100 px-3 text-base py-2 rounded text-blue-800 w-full">
                        {{$error}}
                    </div>
                @endforeach
            </div>
            @endif
            @yield('main')
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
