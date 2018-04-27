@extends('layout')

@section('content')
<meta charset="utf-8">
<meta name = "description" content = "{% trans from 'bureautique' %} descriptionBureautiq {% endtrans %}" >
<meta name = "keywords" content = "{% trans from 'bureautique' %} keywordBureautiq {% endtrans %}" >
<meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div id="main_bureautique">

    <div class="sous-menu">
        {{ __('bureautique.logicielDeBUREAU') }}
    </div>
    <div class="flex-contain">

        <div class="left-nav">

            @include('Inc.left-nav')
        </div>

        <div class="main-contain-middle">

            <div class="baniereb">

                <div class="img-et-msg-baniere">
                    <img class="baniere-img box-baniereb" src="{{ URL::asset('img/secretaire.jpg') }}"  alt="">
                    <div class="messages-baniere">
                        <div class="vertical">
                            <div class="baniere-msgb ">
                                <h2> {{ __('bureautique.secretBUR') }}</h2>

                            </div>

                            <div class="baniere-msg-2">
                                {{ __('bureautique.objectif') }}
                            </div>
                        </div>

                    </div>

                </div>





                <div class="lineb">
                    {{ __('bureautique.atout') }}
                </div>

            </div >



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
                        <h3><a href="#"> {{ __('bureautique.SecreBUREAU') }} </a></h3>
                    </div>
                    <div class="importante"> {{ __('bureautique.Freq_01') }} </div>

                    <div class="datecours">
                        {{ __('bureautique.detail_01') }}
                    </div>

                    <div class="annonce-inscription but">
                        {{ __('bureautique.messag_01') }}
                    </div>

                    <div class="category-desktop-contain">
                        <table class="table01">
                            <tr>
                                <th> {{ __('bureautique.Element_01') }}  </th>
                                <td>
                                    <ul>
                                        <li>{{ __('bureautique.module_01') }} </li>
                                        <li>{{ __('bureautique.module_02') }}</li>
                                        <li>{{ __('bureautique.module_03') }}</li>
                                        <li>{{ __('bureautique.module_04') }}</li>
                                        <li>{{ __('bureautique.module_05') }}</li>
                                        <li>{{ __('bureautique.module_06') }}</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <th> {{ __('bureautique.Element_02') }}  </th>
                                <td> {{ __('bureautique.Duree_01') }} </td>
                            </tr>
                            <tr>
                                <th> {{ __('bureautique.Element_03') }}  </th>
                                <td> {{ __('bureautique.Freq_01') }} </td>
                            </tr>

                        </table>
                    </div>

                </div>
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="#"> {{ __('bureautique.LogicielBUREAU') }}  </a></h3>
                    </div>
                    <div class="importante"> {{ __('bureautique.Frequ_02') }} </div>

                    <div class="datecours">
                        {{ __('bureautique.detail_02') }}
                    </div>

                    <div class="annonce-inscription but">
                        {{ __('bureautique.messag_02') }}
                    </div>

                    <div class="category-desktop-contain">
                        <table class="table01">
                            <tr>
                                <th> {{ __('bureautique.Element_11') }}  </th>
                                <td>
                                    <ul>
                                        <li>{{ __('bureautique.module_11') }}</li>
                                        <li>{{ __('bureautique.module_12') }}</li>
                                        <li>{{ __('bureautique.module_13') }}</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <th> {{ __('bureautique.Element_12') }}  </th>
                                <td> {{ __('bureautique.Duree_11') }} </td>
                            </tr>
                            <tr>
                                <th> {{ __('bureautique.Element_13') }}  </th>
                                <td> {{ __('bureautique.Frequ_02') }} </td>
                            </tr>

                        </table>                        </div>

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
                        <h3><a href="{{ ('main_CoursParticulier') }}">{{ __('formation_continue.crsParti') }}</a></h3>
                    </div>
                    {{ __('formation_continue.presentationCoursParti') }}
                </div>
            </div>

            <div class="separator"></div>

        </div>
    </div>

@include('Inc.actualites')
</div>

@endsection