@extends('layout')

@section('content')

{% block meta %}
<meta charset="utf-8">
<meta name = "description" content = "{% trans from 'anglais' %} descriptionANGL {% endtrans %}" >
<meta name = "keywords" content = "{% trans from 'anglais' %} keywordANGL {% endtrans %}" >
<meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{% endblock %}
{% block title %}
{% trans from 'anglais' %} title {% endtrans %}
{% endblock  %}

{% block mycss %}
<style>
    .students-img {
        border: 3px solid red;
        background-color: #0000cc;
        display:block;
        width: 45%;
        height: 100%;
    }

    .parallax {
        /* The image used
        background-image: url("img_parallax.jpg");*/
        border: 2px solid red;
        /* Set a specific height */
        min-height: 500px;
        width: 50%;
        display:block;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: left;
        background-repeat: no-repeat;
        /*background-size: cover;*/
        background-size: 50%  auto;
    }

    .manuels-img {
        width: 18%;
    }
    .manuels-img {
        width: 18%;
    }
    .horaire {
        display: inline-block;
        padding: 1%;
        margin: 1%;
        background: white;
    }
    .baniere{
        width: 100%;
        max-height: 400px;
    }
    .baniere-msg {
        width: 55%;
        float: right;
        color: white;
        font-family: "Lucida Sans Unicode", "Lucida Grande", Verdana, Arial, Helvetica, sans-serif;
        font-size: 150%;
        padding: 3%;
    }

    .sous-menu {
        background-color: #f16e00;
        color: white;
        font-size: 200%;
        text-align: center;
    }

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

    .table02 {
        width: 100%;
        background-color: #f16e00;
        color: white;
        border-collapse: separate;
    }

    .table03 {
        width: 100%;
        background-color: #0000cc;
        color: white;
        border-collapse: separate;
    }

    .abc {
        border: 5px solid transparent;
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
{# mettre le css si la page t'oublige #}
{% endblock %}
{% block header %}
{% include 'MainBundle:CTI:first-nav.html.twig' %}
{% include 'MainBundle:CTI:mobile-nav.html.twig' %}
{% include 'MainBundle:Default:cti-navbar.html.twig' %}

{% endblock %}

{% block  mainLg %}

<div id="main_home">

    <div class="message_and_image">
        <div class="message_on_image">{% trans from 'anglais' %} baniere {% endtrans %}</div>

        <div id="about_top" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">
            <img class="baniere" id="top_img" src="{{ asset('data/img/baniere1.jpg') }}" alt="">
            {# il  est possible de travailler directement  ici. si  vous voulez occuper toute la page dans la width #}
        </div>
    </div>

    <div class="flex-contain">

        <div class="">


            <div class="accueil">

                <div>
                    {% trans from 'anglais' %} PlsFormats {% endtrans %}
                    <ul>
                        <li><a href="{{ route('login') }}">{% trans from 'anglais' %} CoursIntens {% endtrans %}</a></li>
                        <li><a href="{{ route('login') }}">{% trans from 'anglais' %} FormatReg {% endtrans %}</a></li>
                        <li><a href="{{ route('login') }}">{% trans from 'anglais' %} FormatRegACC {% endtrans %}</a></li>
                        <li><a href="{{ route('login') }}">{% trans from 'anglais' %} prEntrep {% endtrans %}</a> </li>
                        <li><a href="{{ route('login') }}">{% trans from 'anglais' %} CoursVACCANCES {% endtrans %}</a> </li>
                        <li><a href="{{ route('login') }}">{% trans from 'anglais' %} CoursPARTICULIERS {% endtrans %}</a> </li>
                    </ul>
                </div>

                <div>  {% trans from 'about' %} about.block15 {% endtrans %} </div>
                <div class="utiles">
                    <a class="liens-utiles" href="{{ route('login') }}">>>{% trans from 'anglais' %} diffNIVEAUX {% endtrans %}</a>
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
                            <a class="myButton" href="{{ route('login') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
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
                            <a class="myButton" href="{{ route('login') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
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
                            <a class="myButton" href="{{ route('login') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
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
                            <a class="myButton" href="{{ route('login') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
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
                            <a class="myButton" href="{{ route('login') }}">{% trans from 'anglais' %} bac4 {% endtrans %}</a>
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
{% endblock %}

{% block footer %}
{% include 'MainBundle:Default:cti-footer.html.twig' %}
{% endblock %}
{% block myjs %}
{# mettre des liens vers des pages externe js si c'est  necessaire #}
{% endblock %}
@endsection