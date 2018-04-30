@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'securite' %} descriptionSecurite {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'securite' %} keywordSecurite {% endtrans %}" >
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
            {{ __('securite.securiteINFO') }}
        </div>
        <div class="flex-contain">

            <div class="left-nav">

                @include('Inc.left-nav')
            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img box-baniereb" src="{{ URL::asset('img/secu_info.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="baniere-msgb">
                                    <h2>{{ __('securite.securiteMASTERING') }}</h2>
                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('securite.objectif') }}
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('securite.atoutSECURITE') }}
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
                    <div>  {{ __('securite.formationSECURITE') }} </div>

                </div>



                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('securite.presentationSECU') }} </h3>
                        </div>

                        <div class="">
                            {{ __('securite.texte_01') }}
                        </div>
                        <ul class="liste">
                            <li> {{ __('securite.risque_01') }} </li>
                            <li> {{ __('securite.risque_02') }} </li>
                            <li> {{ __('securite.risque_03') }} </li>
                            <li> {{ __('securite.risque_04') }} </li>
                            <li> {{ __('securite.risque_05') }} </li>
                        </ul>
                        <div class="">
                            {{ __('securite.texte_02') }}
                        </div>


                    </div>

                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('internet.objectifINTERNET') }} </h3>
                        </div>

                        <div class="">
                            {{ __('internet.texte_01') }}
                        </div>
                        <ul class="liste">
                            <li> {{ __('internet.but_01') }} </li>
                            <li> {{ __('internet.but_02') }} </li>
                            <li> {{ __('internet.but_03') }} </li>
                            <li> {{ __('internet.but_04') }} </li>
                            <li> {{ __('internet.but_05') }} </li>
                        </ul>


                    </div>


                </div>

                <div class="separator"></div>

            </div>
        </div>

        @include('Inc.actualites')

    </div>

@endsection