@extends('layout')

@section('content')
    <div class="main_allemand">

        <div class="message_and_image" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">
            <img  id="top_img" src="{{ asset('data/img/baniere2.png') }}" alt="">

            <div class="message_on_image">{{ __('allemand.title1') }}</div>

       </div>

        <div class="row line">{{ __('allemand.text2') }}

       </div>


        <div class="flex-contain">

            <div class="">


                <div class="accueil">

                    <div>{{ __('allemand.text1') }}<br>
                        Plusieurs formats disponibles:
                        <ul>
                            <li><a href="main_etudierEnAllemagne">Cours Pour Etudes en Allemagne</a></li>
                            <li><a href="main_regroupementFamilial">Pour Regroupement familial</a></li>
                            <li><a href="main_CoursParticuliersdAll">Cours aux Particuliers</a></li>
                        </ul>
                    </div>

                    <div>
                        {{ __('allemand.Block1') }}
                    </div>

                    <div class="utiles">
                        <a class="liens-utiles" href="main_NiveauxDeLangue">Consulter les différents niveaux de langue</a>
                    </div>

                </div>

                <div class="row section admission">
                    <h2 class="bloc-title"> {{ __('allemand.coursDispo') }}  </h2>
                    <div class="inner padding">
                        <div class="flex">
                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">Goethe-Zertifikat A1</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">GZA1</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('allemand.gza1') }}
                                </div>
                                <a class="myButton" href="javascript:;"> {{ __('allemand.bac4') }}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">Goethe-Zertifikat A2</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">GZA2</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('allemand.gza2') }}
                                </div>
                                <a class="myButton" href="javascript:;"> {{ __('allemand.bac4') }} </a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">Goethe-Zertifikat B1</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">GZB1</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('allemand.gzb1') }}
                                </div>
                                <a class="myButton" href="javascript:;"> {{ __('allemand.bac4') }} </a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">Goethe-Zertifikat B2</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">GZB2</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('allemand.gzb2') }}
                                </div>
                                <a class="myButton" href="javascript:;"> {{ __('allemand.bac4') }} </a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">Goethe-Zertifikat C1</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">GZC1</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {{ __('allemand.gzc1') }}
                                </div>
                                <a class="myButton" href="javascript:;"> {{ __('allemand.bac4') }} </a>
                                <div class="triangle-bottom"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="separator"></div>

        <div class="section programmes-main-div">
            <h2 class="bloc-title">{{ __('allemand.news') }}</h2>

            <div class="inner padding">
                <div class="flex">
                    <div class="hexagon degrade admission-hexagon">
                        <div class="news-title"><h4>{{ __('allemand.cours_anglais') }}</h4></div>

                        <p style="text-align: left">{{ __('allemand.english_news') }}</p>
                    </div>

                    <div class="hexagon degrade admission-hexagon">
                        <div class="news-title"><h4>{{ __('allemand.cours_allemand') }}</h4></div>
                        <p style="text-align: left">{{ __('allemand.allemandNews') }}</p>
                    </div>

                    <div class="hexagon degrade admission-hexagon">
                        <div class="news-title"><h4>{{ __('allemand.cours_informatique') }}</h4></div>
                        <p style="text-align: left">{{ __('allemand.infoNews') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection








