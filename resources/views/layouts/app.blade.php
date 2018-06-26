<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    
     
            @yield('content')
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script>
    $('#sandbox-container .input-group.date').datepicker({
        maxViewMode: 3,
        clearBtn: true,
        orientation: "bottom left",
        multidate: false,
        autoclose: true
    });    
</script>
</body>
</html>
