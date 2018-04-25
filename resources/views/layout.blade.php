<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>CTI - Churchill Training Institute</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <script src="{{ URL::asset('js/app.js') }}"></script>

    <!-- Styles -->

</head>
<body>

<div id="first-nav">
    <div class="first-nav-items">
        {{ __('first-nav.ls') }} :  <a  href="{{ URL::asset('lang/fr') }}">Francais</a> | <a  href="{{ URL::asset('lang/en') }}">English</a>

    </div>
</div>

@include('cti-navbar')

@yield('content')
@include('footer')
</body>
</html>