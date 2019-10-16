<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Trident</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!--BOOTSTRAP CSS-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/plugins/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/plugins/responsive.dataTables.css')}}">
        <link rel="stylesheet" href="{{asset('css/plugins/jquery.multiselect.css')}}">
    </head>
        <body>
        @yield('body-content')
        </body>
        <script src="{{asset('js/jquery/jquery.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{asset('js/plugins/jquery.multiselect.js')}}"></script>
        <script src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/custom/script.js')}}"></script>
</html>
