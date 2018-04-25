@extends('layout')

@section('content')
    <div id="main_home">

        <div class="message_and_image">
            <div class="message_on_image">{{ __('anglais.baniere') }}</div>

            <div id="about_top" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">
                <img class="baniere" id="top_img" src="{{ asset('data/img/baniere1.jpg') }}" alt="">
                {# il  est possible de travailler directement  ici. si  vous voulez occuper toute la page dans la width #}
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

                    <div>  {% trans from 'about' %} about.block15 {% endtrans %} </div>
                    <div class="utiles">
                        <a class="liens-utiles" href="{{ ('main_NiveauxDeLangue') }}">>>{% trans from 'anglais' %} diffNIVEAUX {% endtrans %}</a>
                    </div>

                </div>

                <div class="row section admission">
                    <h2 class="bloc-title"> {% trans from 'anglais' %} coursDispo {% endtrans %} </h2>
                    <div class="">
                        <div class="flex">
                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre"> {% trans from 'anglais' %} block1 {% endtrans %} </div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">IEPL</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {% trans from 'anglais' %} bac1 {% endtrans %}
                                </div>
                                <a class="myButton" href="{{ ('main_CoursIntensifs') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre"> {% trans from 'anglais' %} block2 {% endtrans %} </div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">REPL</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {% trans from 'anglais' %} bac2 {% endtrans %}
                                </div>
                                <a class="myButton" href="{{ ('main_FormationContinue') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">{% trans from 'anglais' %} block3 {% endtrans %}</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv">REPL2</span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {% trans from 'anglais' %} bac3 {% endtrans %}
                                </div>
                                <a class="myButton" href="{{ ('main_FormationContinue') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">{% trans from 'anglais' %} block4 {% endtrans %}</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv"></span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {% trans from 'anglais' %} bac5 {% endtrans %}
                                </div>
                                <a class="myButton" href="{{ ('main_CoursParticulier') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
                                <div class="triangle-bottom"></div>
                            </div>

                            <div class="hexagon degrade admission-hexagon">
                                <div class="triangle-top"></div>
                                <div class="titre">{% trans from 'anglais' %} block5 {% endtrans %}</div>
                                <h3>
                                    <i class="icon-fleche-droite grand"></i>
                                    <span class="adm-niv"></span>
                                    <i class="icon-fleche-gauche grand"></i></h3>
                                <div class="content">
                                    {% trans from 'anglais' %} bac6 {% endtrans %}
                                </div>
                                <a class="myButton" href="{{ ('main_CoursDeVacances') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
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