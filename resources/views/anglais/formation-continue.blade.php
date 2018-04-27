@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'formation-continu' %} descriptionFormCont {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'formation-continu' %} keywordFormCont {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div id="main_sousRubriqAngl">

        <div class="sous-menu">
            {{ __('formation_continue.continuANGL') }}
        </div>


        <div class="flex-contain">

            <div class="left-nav">

                @include('Inc.left-nav')

            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img box-baniereb" src="{{ URL::asset('img/students3.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="baniere-msgb">
                                    <h2>{{ __('formation_continue.formationCONTINUE') }}</h2>

                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('formation_continue.object') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('formation_continue.serviceCONTINUE') }}
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
                            <h3> {{ __('formation_continue.FReg') }} </h3>
                        </div>
                        <div class="importante"> {{ __('formation_continue.freq0') }} </div>

                        <div class="datecours">
                            {{ __('formation_continue.detail0') }}
                        </div>

                        <div class="annonce-inscription but">
                            {{ __('formation_continue.messag0') }}
                        </div>

                        <div class="category-desktop-contain">
                            <table class="table01">
                                <tr>
                                    <th> {{ __('formation_continue.tbl0Elt1') }}  </th>
                                    <td> A1, A2, B1, B2, C1, C2 </td>
                                </tr>
                                <tr>
                                    <th> {{ __('formation_continue.tbl0Elt2') }}  </th>
                                    <td> IELTS, TOEFL,TOEIC </td>
                                </tr>
                                <tr>
                                    <th> {{ __('formation_continue.tbl0Elt3') }}  </th>
                                    <td> {{ __('formation_continue.tbl0Elt4') }} </td>
                                </tr>
                                <tr>
                                    <th> {{ __('formation_continue.tbl0Elt5') }}  </th>
                                    <td> {{ __('formation_continue.tbl0Elt6') }} </td>
                                </tr>

                            </table>
                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('formation_continue.FRegAcc') }} </h3>
                        </div>
                        <div class="importante"> {{ __('formation_continue.freq1') }} </div>

                        <div class="datecours">
                            {{ __('formation_continue.detail2') }}
                        </div>

                        <div class="annonce-inscription but">
                            {{ __('formation_continue.messag1') }}
                        </div>

                        <table class="table01">
                            <tr>
                                <th> {{ __('formation_continue.tbl1Elt1') }}  </th>
                                <td> A1, A2, B1, B2, C1, C2 </td>
                            </tr>
                            <tr>
                                <th> {{ __('formation_continue.tbl1Elt2') }}  </th>
                                <td> IELTS, TOEFL,TOEIC </td>
                            </tr>
                            <tr>
                                <th> {{ __('formation_continue.tbl1Elt3') }}  </th>
                                <td> {{ __('formation_continue.tbl1Elt4') }} </td>
                            </tr>
                            <tr>
                                <th> {{ __('formation_continue.tbl1Elt5') }}  </th>
                                <td> {{ __('formation_continue.tbl1Elt6') }} </td>
                            </tr>
                        </table>


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