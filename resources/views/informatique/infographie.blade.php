@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'infographie' %} descriptionInfograph {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'infographie' %} keywordInfograph {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .horaire {
            display: inline-block;
            padding: 1%;
            margin: 1%;
            background: white;
        }

        .baniere-img{
            width: 40%;
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
            {{ __('infographie.infoGRAH') }}
        </div>
        <div class="flex-contain">

            <div class="left-nav">

                @include('Inc.left-nav')

            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img box-baniereb" src="{{ URL::asset('img/infograph.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="baniere-msgb">
                                    <h2>{{ __('infographie.infographDESIGN') }}</h2>

                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('infographie.objectif') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('infographie.atoutINFOGR') }}
                    </div>
                </div>

                <div class="cat-containerb">
                    <div class="">
                        <div class="category-title">
                            <h3>{{ __('actualites.prochaineRentree') }}:
                                {{ __('actualites.debutDesCours') }}
                            </h3>
                        </div>
                        <div class="datecours">
                            <div class="annonce-inscription">
                                {{ __('actualites.placesDISPO') }}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="titreFormation">
                    <div>  {{ __('infographie.formationINFOGRAPHIE') }} </div>

                </div>



                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('infographie.objectifINFOGR') }} </h3>
                        </div>

                        <div class="">
                            {{ __('infographie.texte_01') }}
                        </div>
                        <ul class="objectifs">
                            <li> {{ __('infographie.but_01') }} </li>
                            <li> {{ __('infographie.but_02') }} </li>
                            <li> {{ __('infographie.but_03') }} </li>
                            <li> {{ __('infographie.but_04') }} </li>
                            <li> {{ __('infographie.but_05') }} </li>
                        </ul>


                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('infographie.programINFOGRAPHIE') }} </h3>
                        </div>
                        <div class=""> {{ __('infographie.texte_11') }} </div>
                        <ul class="datecours objectifs">
                            <li>{{ __('infographie.partie_1') }}</li>
                            <li>{{ __('infographie.partie_2') }}</li>
                            <li>{{ __('infographie.partie_3') }}</li>
                            <li>{{ __('infographie.partie_4') }}</li>
                        </ul>

                        <div class="annonce-inscription but">
                            {{ __('infographie.texte_12') }}
                        </div>

                        <div class="category-desktop-contain">
                            <table class="table01">
                                <tr>
                                    <td> {{ __('infographie.logiciel_1') }}  </td>
                                    <td> {{ __('infographie.logiciel_2') }} </td>
                                </tr>

                                <tr>
                                    <td> {{ __('infographie.logiciel_3') }}  </td>
                                    <td> {{ __('infographie.logiciel_4') }} </td>
                                </tr>
                                <tr>
                                    <td> {{ __('infographie.logiciel_5') }}  </td>
                                    <td> {{ __('infographie.logiciel_6') }} </td>
                                </tr>

                            </table>
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
                            <h3> {{ __('infographie.dureeEtFreq') }} </h3>
                        </div>

                        <!--    <div> {% trans from 'infographie' %} texte_34 {% endtrans %} </div>  -->
                        <table class="table01">
                            <tr>
                                <th> {{ __('infographie.texte_31') }}  </th>
                                <td> {{ __('infographie.theorieEtPratique') }} </td>
                            </tr>

                            <tr>
                                <th> {{ __('infographie.texte_32') }}  </th>
                                <td> {{ __('infographie.stage') }} </td>
                            </tr>
                            <tr>
                                <th> {{ __('infographie.texte_33') }}  </th>
                                <td> {{ __('infographie.periode') }} </td>
                            </tr>

                        </table>
                    </div>
                </div>

                <div class="separator"></div>

            </div>
        </div>

        @include('Inc.actualites')

    </div>

@endsection