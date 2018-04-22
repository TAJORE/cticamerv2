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
    <link href="css/app.css" rel="stylesheet" type="text/css">
    <script src="js/app.js"></script>
    <!-- Styles -->

</head>
<body>
<div id="first-nav">
    <div class="first-nav-items">
        {{ __('first-nav.ls') }} : <a href="lang/fr">Français</a> | <a href="lang/en">English</a>

    </div>


</div>

<br/>

<div id="cti-nav">
    <div class="ctic-nav" >
        <div class="nav-and-logo">


            <div class="nav_bar">

                <div class="nav-items">
                    <ul>




                        <li class="ctidropdown">
                            <a href="" class="dropbtn">
                                {{ __('first-nav.ls') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="lang/fr">Français</a>
                                <a href="lang/en">English</a>
                            </div>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>















<br/>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        {{ Config::get('languages')[App::getLocale()] }}
    </a>
    <ul class="dropdown-menu">
        @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <li>
                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</li>

@yield('content');
</body>
</html>