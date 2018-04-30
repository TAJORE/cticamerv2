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

        <div id="main_sousRubriqAngl">

        <div class="sous-menu">
            {{ __('pour_etudier.title2') }}

        </div>


        <div class="flex-contain">

            <div class="left-nav">

                @include('Inc.left-nav')

            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img " src="{{ URL::asset('img/students1.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="">
                                    <h2>{{ __('pour_etudier.title1') }}</h2>
                                </div>
                                <div class="baniere-msg-2">
                                    {{ __('pour_etudier.text1') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lineb">
                        {{ __('pour_etudier.text2') }}
                    </div>
                </div>
                <div class="cat-containerb">
                    <div class="">
                        <div class="category-title">
                            <h4>
                                {{ __('pour_etudier.rentree') }}

                            </h4>
                        </div>
                        <div class="datecours">
                            <div class="annonce-inscription">
                                {{ __('pour_etudier.text3') }}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('pour_etudier.text4') }}
                            </h3>
                        </div>
                        <div class="datecours">
                            {{ __('pour_etudier.text5') }}
                        </div>
                        <div class="annonce-inscription">

                        </div>
                        <div class="category-desktop-contain">

                        </div>
                        <div style="text-align: justify">{{ __('pour_etudier.text6') }}</div>
                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('pour_etudier.text7') }}</h3>
                        </div>
                        {{ __('pour_etudier.text8') }}<br>
                        <div class="category-desktop-contain">
                            <ul>
                                <li>{{ __('pour_etudier.text9') }}</li>
                                <li>{{ __('pour_etudier.text10') }}</li>
                                <li>{{ __('pour_etudier.text11') }}</li>
                                <li>{{ __('pour_etudier.text12') }}</li>
                                <li>{{ __('pour_etudier.text13') }}</li>
                            </ul>
                            NB: {{ __('pour_etudier.text14') }}<br>
                            {{ __('pour_etudier.text15') }}

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
                            <h3> {{ __('pour_etudier.text16') }} </h3>
                        </div>

                        {{ __('pour_etudier.text17') }}
                        <div class="">
                            <div class=" horaire ">
                                <div class="news-title"><h4>{{ __('pour_etudier.text18') }}</h4></div>

                                <div class="news-title"><p>{{ __('pour_etudier.text19') }}</p></div>
                            </div>

                            <div class=" horaire ">
                                <div class="news-title"><h4>{{ __('pour_etudier.text20') }}</h4></div>

                                <div class="news-title"><p>{{ __('pour_etudier.text21') }}</p></div>
                            </div>

                            <div class="horaire">
                                <div class="news-title"><h4>{{ __('pour_etudier.text22') }}</h4></div>

                                <div class="news-title"><p>{{ __('pour_etudier.text23') }}</p></div>
                            </div>

                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3><a href="{{ __('main_CoursParticulier') }}">{{ __('pour_etudier.text24') }}</a></h3>
                        </div>
                        {{ __('pour_etudier.text25') }} <br>
                        {{ __('pour_etudier.text26') }}
                    </div>
                </div>
                <div class="separator"></div>

            </div>
        </div>
            @include('actualites')
    </div>




@endsection