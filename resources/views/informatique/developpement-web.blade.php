@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'webdevelopment' %} descriptionDevWeb {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'webdevelopment' %} keywordDevWeb {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
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
            {{ __('webdevelopment.devWEB') }}
        </div>
        <div class="flex-contain">

            <div class="left-nav">

                @include('Inc.left-nav')

            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img box-baniereb" src="{{ URL::asset('img/develop.png') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="baniere-msgb">
                                    <h2>{{ __('webdevelopment.devMASTERING') }}</h2>

                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('webdevelopment.objectif') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('webdevelopment.atoutDEVWEB') }}
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
                    <div>  {{ __('webdevelopment.formationDEVWEB') }} </div>

                </div>



                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('webdevelopment.objectifDEV') }} </h3>
                        </div>

                        <div class="">
                            {{ __('webdevelopment.texte_01') }}
                        </div>
                        <ul class="objectifs">
                            <li> {{ __('webdevelopment.but_01') }} </li>
                            <li> {{ __('webdevelopment.but_02') }} </li>
                            <li> {{ __('webdevelopment.but_03') }} </li>
                            <li> {{ __('webdevelopment.but_04') }} </li>
                            <li> {{ __('webdevelopment.but_05') }} </li>
                        </ul>
                        <div class="">
                            {{ __('webdevelopment.texte_02') }}
                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('webdevelopment.programDEVWEB') }} </h3>
                        </div>
                        <div class=""> {{ __('webdevelopment.texte_11') }} </div>
                        <ul class="datecours">
                            <li>{{ __('webdevelopment.contenu_1') }}</li>
                            <li>{{ __('webdevelopment.contenu_2') }}</li>
                            <li>{{ __('webdevelopment.contenu_3') }}</li>
                            <li>{{ __('webdevelopment.contenu_4') }}</li>
                            <li>{{ __('webdevelopment.contenu_5') }}</li>
                            <li>{{ __('webdevelopment.contenu_6') }}</li>
                            <li>{{ __('webdevelopment.contenu_7') }}</li>
                        </ul>

                        <div class="annonce-inscription but">
                            {{ __('webdevelopment.texte_12') }}
                        </div>

                        <div class="category-desktop-contain">
                            <table class="table01">
                                <tr>
                                    <td> {{ __('webdevelopment.outil_1') }}  </td>
                                    <td> {{ __('webdevelopment.outil_2') }} </td>
                                </tr>

                                <tr>
                                    <td> {{ __('webdevelopment.outil_3') }}  </td>
                                    <td> {{ __('webdevelopment.outil_4') }} </td>
                                </tr>
                                <tr>
                                    <td> {{ __('webdevelopment.outil_5') }}  </td>
                                    <td> {{ __('webdevelopment.outil_6') }} </td>
                                </tr>

                            </table>
                        </div>

                    </div>


                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('webdevelopment.dureeEtFreq') }} </h3>
                        </div>

                        <!--    <div> {% trans from 'webdevelopment' %} texte_34 {% endtrans %} </div>  -->
                        <table class="table01">
                            <tr>
                                <th> {{ __('webdevelopment.texte_21') }}  </th>
                                <td> {{ __('webdevelopment.theorieEtPratique') }} </td>
                            </tr>

                            <tr>
                                <th> {{ __('webdevelopment.texte_22') }}  </th>
                                <td> {{ __('webdevelopment.stage') }} </td>
                            </tr>
                            <tr>
                                <th> {{ __('webdevelopment.texte_23') }}  </th>
                                <td> {{ __('webdevelopment.periode') }} </td>
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