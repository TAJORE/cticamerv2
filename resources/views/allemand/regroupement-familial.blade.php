@extends('layout')

@section('content')



    <style>
        .students-img {
            border: 3px solid red;
            background-color: #0000cc;
            display:block;
            width: 45%;
            height: 100%;
        }
        .parallax {
            /* The image used
            background-image: url("img_parallax.jpg");*/
            border: 2px solid red;
            /* Set a specific height */
            min-height: 500px;
            width: 50%;
            display:block;
            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: left;
            background-repeat: no-repeat;
            /*background-size: cover;*/
            background-size: 50%  auto;
        }
        .manuels-img {
            width: 18%;
        }
        .horaire {
            display: inline-block;
            padding: 1%;
            margin: 1%;
            background: white;
        }
        .baniere{
            width: 100%;
            max-height: 400px;
        }
        .baniere-img{
            width: 40%;
        }
        .baniere-msg {
            width: 55%;
            float: right;
            color: white;
            font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
            font-size: 150%;
            padding: 3%;
        }
        .sous-menu {
            background-color: #f16e00;
            color: white;
            font-size: 200%;
            text-align: center;
        }
    </style>

    <div id="main_regroupement_familial">

        <div class="sous-menu">
            {{ __('regroupement_familial.title2') }}

        </div>


        <div class="flex-contain">

            <div class="left-nav">
                @include('Inc.left-nav')

            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img " src="{{ URL::asset('img/regroupement-famille.gif') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="">
                                    <h2>{{ __('regroupement_familial.title1') }}</h2>
                                </div>
                                <div class="baniere-msg-2">
                                    {{ __('regroupement_familial.text1') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lineb">
                        {{ __('regroupement_familial.text2') }}
                    </div>
                </div>
                <div class="cat-containerb">
                    <div class="">
                        <div class="category-title">
                            <h4>
                                {{ __('regroupement_familial.rentree') }}

                            </h4>
                        </div>
                        <div class="datecours">
                            <div class="annonce-inscription">
                                {{ __('regroupement_familial.text3') }}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('regroupement_familial.text4') }}
                            </h3>
                        </div>
                        <div class="datecours">

                        </div>
                        <div class="annonce-inscription">

                        </div>
                        <div class="category-desktop-contain">

                        </div>
                        {{ __('regroupement_familial.text5') }}
                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('regroupement_familial.text7') }}</h3>
                        </div>
                        {{ __('pour_etudier.text8') }}<br>
                        <div class="category-desktop-contain">
                            <ul>
                                <li>{{ __('regroupement_familial.text9') }}</li>
                                <li>{{ __('regroupement_familial.text10') }}</li>
                                <li>{{ __('regroupement_familial.text11') }}</li>
                                <li>{{ __('regroupement_familial.text12') }}</li>
                                <li>{{ __('regroupement_familial.text13') }}</li>
                            </ul>
                             {{ __('regroupement_familial.text14') }}
                            {{ __('regroupement_familial.text15') }}

                        </div>
                        <div class="category-desktop-contain">
                            <img class="manuels-img" src="{{ URL::asset('img/menschen-a1.jpg') }}" alt="">
                            <img class="manuels-img" src="{{ URL::asset('img/menschen-a2.1.jpg') }}" alt="">
                            <img class="manuels-img" src="{{ URL::asset('img/ASPEKTE1.jpg') }}" alt="">
                            <img class="manuels-img" src="{{ URL::asset('img/ASPEKTE2.jpg') }}" alt="">
                            <img class="manuels-img" src="{{ URL::asset('img/Aspekte-neu.jpg') }}" alt="">

                        </div>
                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('regroupement_familial.text16') }} </h3>
                        </div>

                        {{ __('regroupement_familial.text17') }}
                        <div class="">
                            <div class=" horaire ">
                                <div class="news-title"><h4>{{ __('regroupement_familial.text18') }}</h4></div>

                                <div class="news-title"><p>{{ __('regroupement_familial.text19') }}</p></div>
                            </div>

                            <div class=" horaire ">
                                <div class="news-title"><h4>{{ __('regroupement_familial.text20') }}</h4></div>

                                <div class="news-title"><p>{{ __('regroupement_familial.text21') }}</p></div>
                            </div>

                            <div class="horaire">
                                <div class="news-title"><h4>{{ __('regroupement_familial.text22') }}</h4></div>

                                <div class="news-title"><p>{{ __('regroupement_familial.text23') }}</p></div>
                            </div>

                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3>{{ __('regroupement_familial.text241') }}</h3>
                        </div>
                        <ul>
                            <li>{{ __('regroupement_familial.text242') }}</li>
                            <li>{{ __('regroupement_familial.text243') }}</li>
                        </ul>
                        <div class="category-title">
                            <h3>{{ __('regroupement_familial.text24') }}</h3>
                        </div>
                        {{ __('regroupement_familial.text25') }}
                        <span>{{ __('regroupement_familial.text261') }}</span>
                    </div>
                </div>
                <div class="separator"></div>

            </div>
        </div>
        @include('actualites')
    </div>




@endsection