@extends('layout')

@section('content')
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'pourEntreprise' %} descriptionENTREP {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'pourEntreprise' %} keywordENTREP {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div id="main_sousRubriqAngl">

        <div class="sous-menu">
            {{ __('pour-entreprise.entrpANGL') }}
        </div>


        <div class="flex-contain">

            <div class="left-nav">

                @include('Inc.left-nav')
            </div>

            <div class="main-contain-middle">

                <div class="baniereb">

                    <div class="img-et-msg-baniere">
                        <img class="baniere-img box-baniereb" src="{{ URL::asset('img/entreprise.jpg') }}" alt="">
                        <div class="messages-baniere">
                            <div class="vertical">
                                <div class="baniere-msgb">
                                    <h2>{{ __('pour-entreprise.prEntrp') }}</h2>

                                </div>

                                <div class="baniere-msg-2">
                                    {{ __('pour-entreprise.object2') }}
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="lineb">
                        {{ __('pour-entreprise.serviceENTREP') }}
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
                            <h3> {{ __('pour-entreprise.formulADAPT') }} </h3>
                        </div>


                        <div class="datecours">
                            {{ __('pour-entreprise.text01') }}
                        </div>

                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3> {{ __('pour-entreprise.progMESUR') }} </h3>
                        </div>
                        <div class="datecours">
                            {{ __('pour-entreprise.text02') }}
                        </div>

                    </div>

                    <div class="categorie">
                        <div class="category-title">
                            <h3>{{ __('pour-entreprise.apprTraining') }} </h3>
                        </div>
                        {{ __('pour-entreprise.apprTrainingText') }}
                    </div>
                    <div class="categorie">
                        <div class="category-title">
                            <h3>{{ __('pour-entreprise.lieuxDsCours') }} </h3>
                        </div>
                        {{ __('pour-entreprise.text03') }}
                    </div>
                </div>

                <div class="separator"></div>

            </div>
        </div>

        @include('actualites')

    </div>

@endsection