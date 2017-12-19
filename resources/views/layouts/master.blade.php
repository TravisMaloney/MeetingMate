<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RecoveryMate</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/main.css" rel="stylesheet" type="text/css">


    </head>
    <body>
        @include('layouts.nav')
        <main>
            @yield('content')        
        </main>

    </body>

    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>    
</html>
