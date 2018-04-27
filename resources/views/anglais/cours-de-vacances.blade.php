@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'vacances' %} descriptionVACC {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'vacances' %} keywordPartVACC {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div id="main_sousRubriqAngl">

        <div class="sous-menu">
            {{ __('vacances.coursVaccANGL') }}
        </div>


        <div class="flex-contain">

            <div class="left-nav">
                @include('left-nav')
            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img box-baniereb" src="{{ URL::asset('img/photo-cti-1.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="baniere-msgb">
                                    <h2>{{ __('vacances.coursVACANCES') }}</h2>

                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('vacances.object3') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('vacances.serviceVACANCES') }}
                    </div>
                </div>

                <div class="cat-containerb">
                    <div class="">
                        <div class="category-title">
                            <h3>{{ __('actualites.prochaineRentree') }}:
                                {{ __('actualites.debutDesCours') }}
                            </h3>
                        </div>
                        <a href="{{ ('main_contactEtHoraires') }}" >
                            <div class="nousContacter">
                                Nous Contacter
                            </div>
                        </a>

                        <div class="datecours">
                            <div class="annonce-inscription">
                                {{ __('actualites.placesDISPO') }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('vacances.prQlaForm') }} </h3>
                        </div>

                        <div class="category-desktop-contain">
                            {{ __('vacances.butFormation') }}
                            <ul>
                                <li> {{ __('vacances.but_01') }} </li>
                                <li> {{ __('vacances.but_03') }} </li>
                                <li> {{ __('vacances.but_04') }} </li>
                            </ul>
                        </div>

                    </div>

                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('vacances.prQInfo') }} </h3>
                        </div>

                        <div class="category-desktop-contain">
                            {{ __('vacances.butINFO') }}
                        </div>
                        <div class="category-desktop-contain">
                            {{ __('vacances.but-info_01') }}
                        </div>

                    </div>
                </div>


                <div class="category-title">
                    <h3> {{ __('vacances.deroulement') }} </h3>
                </div>
                <div class="cat-container">
                    <div class="categorie">
                        <span class="vagues"> {{ __('vacances.ANGL') }} </span>
                        <div class="category-desktop-contain">
                            {{ __('vacances.DETAIL_01') }}
                        </div>
                    </div>
                    <div class="categorie">
                        <span class="vagues"> {{ __('vacances.INFO') }} </span>
                        <div class="category-desktop-contain">
                            {{ __('vacances.DETAIL_02') }}
                        </div>
                    </div>
                </div>

                <div class="category-title">
                    <h3> {{ __('vacances.Program') }} </h3>
                </div>
                <div class="cat-container">
                    <div class="categorie">
                        <span class="vagues"> {{ __('vacances.ANGLAIS') }} </span>
                        <div class="category-desktop-contain">
                            <ul>
                                <li> Reading </li>
                                <li> Writing </li>
                                <li> Listening </li>
                                <li> Speaking </li>
                            </ul>
                        </div>
                    </div>
                    <div class="categorie">
                        <span class="vagues"> {{ __('vacances.INFORMATIQ') }} </span>
                        <div class="category-desktop-contain">
                            <ul>
                                <li> {{ __('vacances.info_01') }} </li>
                                <li> {{ __('vacances.info_02') }} </li>
                                <li> {{ __('vacances.info_03') }} </li>
                                <li> {{ __('vacances.info_04') }} </li>
                                <li> {{ __('vacances.info_05') }} </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="category-title">
                    <h3> {{ __('vacances.cout') }} </h3>
                </div>
                <div class="cat-container">
                    <div class="categorie">
                        <span class="vagues"> {{ __('vacances.ANGL') }} : 30.000 Fcfa</span>
                    </div>
                    <div class="categorie">
                        <span class="vagues"> {{ __('vacances.INFO') }} : 30.000 Fcfa</span>
                    </div>
                </div>
                <div class="vagues">
                    <span> {{ __('vacances.coutREDUIT') }} =  50.000 Fcfa </span> au lieu de 60.000 Fcfa
                </div>



                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('vacances.troisVAGUES') }} </h3>
                        </div>

                        <div class="category-desktop-contain">
                            {{ __('vacances.texteDebut') }}
                            <ul>
                                <li> {{ __('vacances.vague01') }} <span class="vagues"> {{ __('vacances.periode01') }} </span> </li>
                                <li> {{ __('vacances.vague02') }} <span class="vagues"> {{ __('vacances.periode02') }} </span> </li>
                                <li> {{ __('vacances.vague03') }} <span class="vagues"> {{ __('vacances.periode03') }} </span> </li>
                            </ul>
                            {{ __('vacances.texteFin') }}
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

                </div>

                <div class="separator"></div>

            </div>
        </div>

        @include('actualites')

    </div>

@endsection