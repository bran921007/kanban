<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="flex w-full h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Kanban</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body class="w-full" style="height: min-content;">
        <div class="flex flex-row h-full">
            <nav class="bg-gray-100 w-64  justify-between flex flex-col ">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <span class="text-gray-500 text-2xl mx-2 font-semibold">Dashboard</span>
                    </div>
                </div>
                <nav class="mt-10">

                </nav>
            </nav>

            <div class="px-16 py-4 text-gray-700 bg-white h-screen w-screen" id="app">
                <project
                title="Dashboard"
                cards="{{$cards->toJson()}}"
                >
                </project>    
            </div>    
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
