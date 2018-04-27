@extends('layout')
<style>
    .baniere{
        width: 100%;
        max-height: 400px;
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

    .utiles {
        padding: 2%;
        margin: 2%;
    }

    .liens-utiles {

        background-color: #f16e00;
        color: white;
    }

</style>

@section('content')
    <div id="main_home">

        <div class="message_and_image">
            <div class="message_on_image">{{ __('anglais.baniere') }}</div>

            <div id="about_top" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">
                <img class="baniere" id="top_img" src="{{ URL::asset('img/baniere1.jpg') }}" alt="">
            </div>
        </div>

        <div class="flex-contain">
            <div class="">


                <div class="accueil">

                    <div>
                        {{ __('anglais.PlsFormats') }}
                        <ul>
                            <li><a href="{{ ('main_CoursIntensifs') }}">{{ __('anglais.CoursIntens') }}</a></li>
                            <li><a href="{{ ('main_FormationContinue') }}">{{ __('anglais.FormatReg') }}</a></li>
                            <li><a href="{{ ('main_FormationContinue') }}">{{ __('anglais.FormatRegACC') }}</a></li>
                            <li><a href="{{ ('main_PourEntreprises') }}">{{ __('anglais.prEntrep') }}</a> </li>
                            <li><a href="{{ ('main_CoursDeVacances') }}">{{ __('anglais.CoursVACCANCES') }}</a> </li>
                            <li><a href="{{ ('main_CoursParticulier') }}">{{ __('anglais.CoursPARTICULIERS') }}</a> </li>
                        </ul>
                    </div>

                    <div>  {{ __('anglais.block15') }} </div>
                    <div class="utiles">
                        <a class="liens-utiles" href="{{ ('main_NiveauxDeLangue') }}">>>{{ __('anglais.diffNIVEAUX') }}</a>
                    </div>

                </div>

                <div class="row section admission">
                    <h2 class="bloc-title"> {{ __('anglais.coursDispo') }} </h2>
                    <div class="">
                        <div class="flex">
                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre"> {{ __('anglais.block1') }} </div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">IEPL</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('anglais.bac1') }}
                                </div>
                                <a class="myButton" href="{{ ('main_CoursIntensifs') }}">{{ __('anglais.bac4') }}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre"> {{ __('anglais.block2') }} </div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">REPL</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('anglais.bac2') }}
                                </div>
                                <a class="myButton" href="{{ ('main_FormationContinue') }}">{{ __('anglais.bac4') }}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">{{ __('anglais.block3') }}</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">REPL2</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('anglais.bac3') }}
                                </div>
                                <a class="myButton" href="{{ ('main_FormationContinue') }}">{{ __('anglais.bac4') }}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">{{ __('anglais.block4') }}</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv"></span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('anglais.bac5') }}
                                </div>
                                <a class="myButton" href="{{ ('main_CoursParticulier') }}">{{ __('anglais.bac4') }}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">{{ __('anglais.block5') }}</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv"></span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('anglais.bac6') }}
                                </div>
                                <a class="myButton" href="{{ ('main_CoursDeVacances') }}">{{ __('anglais.bac4') }}</a>
                                <div class="triangle-bottom"></div>
                            </div>



                        </div>
                    </div>

                </div>



            </div>

        </div>



        <div class="separator"></div>


        @include('Inc.actualites')








    </div>


@endsection