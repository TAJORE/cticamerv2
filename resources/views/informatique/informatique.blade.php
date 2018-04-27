@extends('layout')

@section('content')

<meta charset="utf-8">
<meta name = "description" content = " {% trans from 'informatique' %} descriptionINFO {% endtrans %} " >
<meta name = "keywords" content = "{% trans from 'informatique' %} keywordINFO {% endtrans %}" >
<meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    table.table01 {
        width: 90%;
        color: #f16e00;
        background-color: white;

    }

    table.table01 td,th {
        padding: 2%;
        margin: 5px!important;
        border: 5px solid transparent!important;
    }

    .accueil {
        background-color: rgba(225, 225, 225, 0.55);
        color: #403574;
        font-size: 150%;
        padding: 3%;
    }
</style>


<div class="main_allemand">

    <div class="message_and_image" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">
        <img  id="top_img" src="{{ URL::asset('img/baniere2.png') }}" alt="">

        <div class="message_on_image">
            {{ __('informatique.text1') }} <BR>

        </div>


    </div>

    <div class="row line">
        <div>  {{ __('informatique.text2') }} </div>

    </div>


    <div class="">

        <div class="">


            <div class="accueil">

                <div>
                    {{ __('informatique.texte_01') }} <br>
                    <ul>
                        <li><a href="{{ ('main_LogicielsBureautique') }}">{{ __('informatique.module_01') }}</a></li>
                        <li><a href="{{ ('main_Design') }}">{{ __('informatique.module_02') }}</a></li>
                        <li><a href="{{ ('main_Internet') }}">{{ __('informatique.module_03') }}</a></li>
                        <li><a href="{{ ('main_AppliWeb') }}">{{ __('informatique.module_04') }}</a> </li>
                        <li><a href="{{ ('main_SecuriteInfo') }}">{{ __('informatique.module_05') }}</a> </li>
                    </ul>
                </div>

                <div>  {{ __('') }} </div>


            </div>

            <div class="row section admission">
                <h2 class="bloc-title">  {{ __('informatique.coursDispo') }} </h2>
                <div class="inner padding">
                    <div class="flex">
                        <div class="hexagon degrade admission-hexagon">
                            <div class="triangle-top"></div>
                            <div class="titre">  {{ __('informatique.secrBuro') }} </div>

                            <div class="content">
                                {{ __('informatique.detail-1') }}
                            </div>
                            <a class="myButton" href="javascript:;"> {{ __('informatique.bac4') }} </a>
                            <div class="triangle-bottom"></div>
                        </div>

                        <div class="hexagon degrade admission-hexagon">
                            <div class="triangle-top"></div>
                            <div class="titre">  {{ __('informatique.Infograph') }} </div>

                            <div class="content">
                                {{ __('informatique.detail-2') }}
                            </div>
                            <a class="myButton" href="javascript:;"> {{ __('informatique.bac4') }} </a>
                            <div class="triangle-bottom"></div>
                        </div>

                        <div class="hexagon degrade admission-hexagon">
                            <div class="triangle-top"></div>
                            <div class="titre">  {{ __('informatique.devAppli') }} </div>

                            <div class="content">
                                {{ __('informatique.detail-3') }}
                            </div>
                            <a class="myButton" href="javascript:;"> {{ __('informatique.bac4') }} </a>
                            <div class="triangle-bottom"></div>
                        </div>


                    </div>
                </div>

            </div>



        </div>

    </div>

    <div class="row line">
        <div> {{ __('informatique.title1') }} : {{ __('informatique.block14') }} </div>

    </div>


    <div class="section admission parallax-container ">
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('img/computerstudents2.jpg') }}" data-position="left top">


        </div>

        <div class="edito supinfo-slogan">
            <div class="triangle-left"></div>
            <div class="contenu">
                <div class="supinfo-slogan-titre">CTI: {{ __('informatique.slogan1') }}</div>
                <p class="home-slogan">{{ __('informatique.slogan2') }}</p>
                <p><a href="">{{ __('informatique.slogan3') }}</a></p>

            </div>

        </div>
    </div>

    <div class="separator"></div>

    @include('Inc.actualites')

</div>


@endsection