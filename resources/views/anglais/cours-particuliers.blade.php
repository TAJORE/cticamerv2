@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'cours-particuliers' %} descriptionPAR {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'cours-particuliers' %} keywordPAR {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div id="main_sousRubriqAngl">

        <div class="sous-menu">
            {{ __('cours_particuliers.coursPartiANGL') }}
        </div>

        <div class="flex-contain">

            <div class="left-nav">

                @include('Inc.left-nav')

            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img box-baniereb" src="{{ URL::asset('img/coursParticulier2.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="baniere-msgb">
                                    <h2>{{ __('cours_particuliers.coursPARangl') }}</h2>

                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('cours_particuliers.object3') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('cours_particuliers.servicePARTICULIERS') }}
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

                <div class="cat-container">
                    <div class="categorie">
                        <div class="category-title">
                            <h3><a href="#"> {{ __('cours_particuliers.programSurMesur') }} </a></h3>
                        </div>

                        <div class="category-desktop-contain">
                            {{ __('cours_particuliers.texte_01') }}
                            <ul>
                                <li>{{ __('cours_particuliers.detail_01') }}</li>
                                <li>{{ __('cours_particuliers.detail_02') }}</li>
                                <li>{{ __('cours_particuliers.detail_03') }}</li>
                                <li>{{ __('cours_particuliers.detail_04') }}</li>
                            </ul>
                            {{ __('cours_particuliers.texte_02') }}
                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3><a href="#"> {{ __('cours_particuliers.materielDIDAC') }} </a></h3>
                        </div>
                        {{ __('cours_particuliers.texte_11') }}<br><br>
                        <ul>
                            <li>{{ __('cours_particuliers.detail_11') }}</li>
                            <li>{{ __('cours_particuliers.detail_12') }}</li>
                            <li>{{ __('cours_particuliers.detail_13') }}</li>
                        </ul>
                        <div class="category-desktop-contain">
                            <img class="manuels-angl-img" src="{{ URL::asset('img/english-unlimited-elementary-a-combo-with-dvd-roms-2.png') }}">
                            <img class="manuels-angl-img" src="{{ URL::asset('img/Official-toelf-Test-Prep.jpg') }}">
                            <img class="manuels-angl-img" src="{{ URL::asset('img/IELTS-Cambridge-Books.jpg') }}">
                        </div>
                        <div class="category-desktop-contain">


                        </div>

                    </div>


                    <div class="categorie">
                        <div class="category-title">
                            <h3><a href="#"> {{ __('cours_particuliers.approchCoach') }} </a></h3>
                        </div>

                        {{ __('cours_particuliers.texte_21') }} <br>

                        <ul>
                            <li>{{ __('cours_particuliers.detail_21') }}</li>
                            <li>{{ __('cours_particuliers.detail_22') }}</li>
                            <li>{{ __('cours_particuliers.detail_23') }}</li>
                        </ul>


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