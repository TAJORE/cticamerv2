@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'cours-intensifs' %} descriptionINT {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'cours-intensifs' %} keywordINT {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div id="main_sousRubriqAngl">

        <div class="sous-menu">
            {{ __('cours-intensifs.coursIntensANGL') }}
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
                        <img class="baniere-img " src="{{ asset('data/img/students2.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="">
                                    <h2>{{ __('cours-intensifs.coursINTENSIF') }}</h2>

                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('cours-intensifs.objectifs') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('cours-intensifs.service') }}
                    </div>
                </div>


                <div class="cat-containerb">
                    <div class="">
                        <div class="category-title">
                            <h3>{{ __('ctihome.prochaineRentree') }}:
                                {{ __('ctihome.debutDesCours') }}
                            </h3>
                        </div>
                        <div class="datecours">
                            <div class="annonce-inscription">
                                {{ __('cours-intensifs.placesDISPO') }}
                            </div>
                        </div>
                    </div>
                </div>



                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('cours-intensifs.IntensPrTous') }} </h3>
                        </div>
                        <div class="importante"> {{ __('cours-intensifs.frequence') }} </div>

                        <div class="category-desktop-contain">
                            {{ __('cours-intensifs.messagDEBUT') }}
                            <ul>
                                <li> {{ __('cours-intensifs.atout1') }} </li>
                                <li> {{ __('cours-intensifs.atout2') }} </li>
                                <li> {{ __('cours-intensifs.atout3') }} </li>
                                <li> {{ __('cours-intensifs.atout4') }} </li>
                                <li> {{ __('cours-intensifs.atout5') }} </li>
                            </ul>
                            {{ __('cours-intensifs.messagFIN') }}
                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('cours-intensifs.manuels') }} </h3>
                        </div>
                        {{ __('cours-intensifs.messagMANUELS') }}
                        <div class="category-desktop-contain">

                        </div>
                        <div class="">
                            <img class="manuels-angl-img" src="{{ asset('data/img/english-unlimited-elementary-a-combo-with-dvd-roms-2.png') }}">
                            <img class="manuels-angl-img" src="{{ asset('data/img/Official-toelf-Test-Prep.jpg') }}">
                            <img class="manuels-angl-img" src="{{ asset('data/img/IELTS-Cambridge-Books.jpg') }}">
                            <img class="manuels-angl-img" src="{{ asset('data/img/englishUnlimited1.png') }}">
                            <img class="manuels-angl-img" src="{{ asset('data/img/englishUnlimited2.jpg') }}">
                        </div>

                    </div>


                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('cours-intensifs.HORAIRES') }} </h3>
                        </div>

                        {{ __('cours-intensifs.messagHORAIRE') }}

                        <div class="">
                            <div class=" horaire ">
                                <div class="news-title"><h4>{{ __('cours-intensifs.periode1') }}</h4></div>

                                <div class="news-title"><p>{{ __('cours-intensifs.heures1') }} </p></div>
                            </div>

                            <div class=" horaire ">
                                <div class="news-title"><h4>{{ __('cours-intensifs.periode2') }}</h4></div>

                                <div class="news-title"><p>{{ __('cours-intensifs.heures2') }}</p></div>
                            </div>

                            <div class="horaire">
                                <div class="news-title"><h4>{{ __('cours-intensifs.periode3') }}</h4></div>

                                <div class="news-title"><p>{{ __('cours-intensifs.heures3') }}</p></div>
                            </div>

                        </div>


                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('cours-intensifs.diffNIV') }} </h3>
                        </div>
                        <p> {{ __('cours-intensifs.phrase1') }} </p>
                        <p> {{ __('cours-intensifs.phrase2') }} </p>
                        <p> {{ __('cours-intensifs.phrase3') }} </p>
                    </div>
                </div>
                {{ __('cours-intensifs.') }}
                <div class="cat-container">
                    <div class="">
                        <div class="nos-rentrees">
                            {{ __('cours-intensifs.choixRENTREE') }}
                        </div>
                        <table class="table02">
                            <tr>
                                <td class="abc"> {{ __('ctihome.rentree1') }}  </td>
                                <td class="abc"> {{ __('ctihome.rentree2') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree3') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree4') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree5') }}  </td>
                                <td class="abc"> {{ __('ctihome.rentree6') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree7') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree8') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree9') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree10') }} </td>
                                <td class="abc"> {{ __('ctihome.rentree11') }}  </td>
                            </tr>

                        </table>
                    </div>
                </div>

                <div class="separator"></div>

            </div>
        </div>



        <div class="section programmes-main-div ">
            {% block ACTUALITE %}
            {% include 'MainBundle:Inc:actualites.html.twig' %}
            {% endblock %}
        </div>
    </div>

@endsection