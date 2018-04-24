@extends('layout')

@section('content')
    <div class="main_allemand">

        <div class="message_and_image" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">
            <img  id="top_img" src="{{ asset('data/img/baniere2.png') }}" alt="">

            <div class="message_on_image">{{ __('allemand.title1') }}</div>

       </div>

        <div class="row line">{{ __('allemand.texte2') }}

       </div>


        <div class="flex-contain">

            <div class="">


                <div class="accueil">

                    <div>{{ __('allemand.texte1') }}<br>
                        Plusieurs formats disponibles:
                        <ul>
                            <span><a class="liens_footer" href="/main_anglais"> {{ __('footer.coursAngl') }} </a></span><br>                    <span><a class="liens_footer" href="main_CoursIntensifs'"> {% trans from 'ctifooter' %} enseignerANGLAIS {% endtrans %} </a></span><br>

                            <li><a href="main_etudierEnAllemagne">Cours Pour Etudes en Allemagne</a></li>
                            <li><a href="main_regroupementFamilial">Pour Regroupement familial</a></li>
                            <li><a href="main_CoursParticuliersdAll">Cours aux Particuliers</a></li>
                            <li><a href="main_CoursSpecialise">Cours Spécialisés</a> </li>
                        </ul>
                    </div>

                    <div>  {% trans from 'allemand' %} Block1 {% endtrans %} </div>
                    <div class="utiles">
                        <a class="liens-utiles" href="main_NiveauxDeLangue">>>Consulter les différents niveaux de langue</a>
                    </div>

                </div>

                <div class="row section admission">
                    <h2 class="bloc-title">  {% trans from 'allemand' %} coursDispo {% endtrans %} </h2>
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
                                    {% trans from 'allemand' %} gza1 {% endtrans %}
                                </div>
                                <a class="myButton" href="javascript:;"> {% trans from 'allemand' %} bac4 {% endtrans %} </a>
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
                                    {% trans from 'allemand' %} gza2 {% endtrans %}
                                </div>
                                <a class="myButton" href="javascript:;"> {% trans from 'allemand' %} bac4 {% endtrans %} </a>
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
                                    {% trans from 'allemand' %} gzb1 {% endtrans %}
                                </div>
                                <a class="myButton" href="javascript:;"> {% trans from 'allemand' %} bac4 {% endtrans %} </a>
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
                                    {% trans from 'allemand' %} gzb2 {% endtrans %}
                                </div>
                                <a class="myButton" href="javascript:;"> {% trans from 'allemand' %} bac4 {% endtrans %} </a>
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
                                    {% trans from 'allemand' %} gzb2 {% endtrans %}
                                </div>
                                <a class="myButton" href="javascript:;"> {% trans from 'allemand' %} bac4 {% endtrans %} </a>
                                <div class="triangle-bottom"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="separator"></div>

        <div class="section programmes-main-div">
            <h2 class="bloc-title">{% trans from 'about' %} about.news {% endtrans %}</h2>

            <div class="inner padding">
                <div class="flex">
                    <div class="hexagon degrade admission-hexagon">
                        <div class="news-title"><h4>{% trans from 'ctihome' %} english {% endtrans %}</h4></div>

                        <p style="text-align: left">{% trans from 'ctihome' %} englishNews {% endtrans %}</p>
                    </div>

                    <div class="hexagon degrade admission-hexagon">
                        <div class="news-title"><h4>{% trans from 'ctihome' %} german {% endtrans %}</h4></div>
                        <p style="text-align: left">{% trans from 'ctihome' %} allemandNews {% endtrans %}</p>
                    </div>

                    <div class="hexagon degrade admission-hexagon">
                        <div class="news-title"><h4>{% trans from 'ctihome' %} computing {% endtrans %}</h4></div>
                        <p style="text-align: left">{% trans from 'ctihome' %} infoNews {% endtrans %}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection








