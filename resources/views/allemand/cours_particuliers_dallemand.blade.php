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

    <div id="main_cours_particuliers_dallemand">

        <div class="sous-menu">
            {{ __('cours_particuliers_dallemand.title2') }}

        </div>


        <div class="flex-contain">

            <div class="left-nav">

                {% block left_nav %}
                {% include 'MainBundle:Inc:left_nav.html.twig' %}
                {% endblock %}

            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img " src="{{ URL::asset('img/coursParticulier.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="">
                                    <h2>{{ __('cours_particuliers_dallemand.title1') }}</h2>
                                </div>
                                <div class="baniere-msg-2">
                                    {{ __('cours_particuliers_dallemand.text1') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lineb">
                        {{ __('cours_particuliers_dallemand.text2') }}
                    </div>
                </div>
                <div class="cat-containerb">
                    <div class="">
                        <div class="category-title">
                            <h4>
                                {{ __('cours_particuliers_dallemand.rentree') }}

                            </h4>
                        </div>
                        <div class="datecours">
                            <div class="annonce-inscription">
                                {{ __('cours_particuliers_dallemand.text3') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('cours_particuliers_dallemand.text4') }}
                            </h3>
                        </div>
                        <div class="datecours">
                            {{ __('cours_particuliers_dallemand.text5') }}
                        </div>

                        <div class="category-desktop-contain">

                        </div>
                        <div class="">
                            <div>
                                <ul>
                                    <li>{{ __('cours_particuliers_dallemand.text6') }}</li>
                                    <li>{{ __('cours_particuliers_dallemand.text61') }}</li>
                                    <li>{{ __('cours_particuliers_dallemand.text62') }}</li>
                                    <li>{{ __('cours_particuliers_dallemand.text63') }}</li>
                                </ul>
                            </div>
                            {{ __('cours_particuliers_dallemand.text64') }}
                        </div>
                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('cours_particuliers_dallemand.text7') }}</h3>
                        </div>
                        {{ __('cours_particuliers_dallemand.text8') }}<br>
                        <div>
                            <ul>
                                <li>{{ __('cours_particuliers_dallemand.text81') }}</li>
                                <li>{{ __('cours_particuliers_dallemand.text82') }}</li>
                                <li>{{ __('cours_particuliers_dallemand.text83') }}</li>
                            </ul>
                        </div>
                        <div class="category-desktop-contain">

                            {{ __('cours_particuliers_dallemand.text14') }}
                            {{ __('cours_particuliers_dallemand.text15') }}

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
                            <h3> {{ __('cours_particuliers_dallemand.text16') }} </h3>


                        </div>
                        {{ __('cours_particuliers_dallemand.text17') }}
                        <div class="">
                            <div>
                                <ul>
                                    <li>{{ __('cours_particuliers_dallemand.text18') }}</li>
                                    <li>{{ __('cours_particuliers_dallemand.text19') }}</li>
                                    <li>{{ __('cours_particuliers_dallemand.text20') }}</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3><a href="">{{ __('cours_particuliers_dallemand.text241') }}</a></h3>
                        </div>
                        <p>{{ __('cours_particuliers_dallemand.text242') }}</p>
                        <p>{{ __('cours_particuliers_dallemand.text243') }}</p>
                        <p>{{ __('cours_particuliers_dallemand.text25') }}</p>



                        <div class="category-title">
                            <h3><a href=""></a></h3>
                        </div>

                    </div>
                </div>
                <div class="cat-container">
                    <div class="">
                        <div class="nos-rentrees">
                            {{ __('actualites.choixRENTREE') }}
                        </div>
                        <table class="table02">
                            <tr>
                                <td class="abc"> {{ __('actualites.rentree1') }}  </td>
                                <td class="abc"> {{ __('actualites.rentree2') }} </td>
                                <td class="abc"> {{ __('actualites.rentree3') }} </td>
                                <td class="abc"> {{ __('actualites.rentree4') }} </td>
                                <td class="abc"> {{ __('actualites.rentree5') }}  </td>
                                <td class="abc"> {{ __('actualites.rentree6') }} </td>
                                <td class="abc"> {{ __('actualites.rentree7') }} </td>
                                <td class="abc"> {{ __('actualites.rentree8') }} </td>
                                <td class="abc"> {{ __('actualites.rentree9') }} </td>
                                <td class="abc"> {{ __('actualites.rentree10') }} </td>
                                <td class="abc"> {{ __('actualites.rentree11') }}  </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="separator"></div>

            </div>
        </div>

        @include('actualites')
    </div>




@endsection