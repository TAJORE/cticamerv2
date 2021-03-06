@extends('layout')

@section('content')



{% block meta %}
<meta name = "{% trans from 'about' %} about.block14 {% endtrans %}" >
<meta name = "keywords" content = "{% trans from 'about' %} about.block15 {% endtrans %}" >
<meta charset="utf-8">



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
</style>
{# mettre le css si la page t'oublige #}
{% endblock %}
{% block header %}
{% include 'MainBundle:CTI:first-nav.html.twig' %}
{% include 'MainBundle:CTI:mobile-nav.html.twig' %}
{% include 'MainBundle:Default:cti-navbar.html.twig' %}


{% endblock %}

{% block  mainLg %}

<div id="main_cours_specialises">

    <div class="message_and_image">
        <div class="message_on_image">
            {% trans from 'allemand' %} title1 {% endtrans %} <BR>
            {% trans from 'allemand' %} text1 {% endtrans %}
        </div>

        <div id="about_top" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">
            <img  id="top_img" src="{{ asset('data/img/about4.jpg') }}" alt="">
            {# il  est possible de travailler directement  ici. si  vous voulez occuper toute la page dans la width #}
        </div>
    </div>

    <div class="row line">
        <div>  {% trans from 'allemand' %} text2 {% endtrans %} </div>

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


            </div>
        </div>

    </div>


    <div class="section programmes-main-div">
        <h2 class="bloc-title"> {% trans from 'allemand' %} niv {% endtrans %} </h2>

        <div class="inner-prog padding">
            <div class="flex">

                <div class="programme">
                    <div class="diamant">
                        <div class="diamant-shape">

                        </div>
                        <div class="diamant-content"> A1 </div>
                    </div>
                    <h4>{% trans from 'about' %}about.year1{% endtrans %}</h4>
                    <h3 class="titre-prog">{% trans from 'about' %} about.discover1 {% endtrans %}</h3>
                    {% trans from 'anglais' %} discover {% endtrans %}
                </div>

                <div class="programme">
                    <div class="diamant">
                        <div class="diamant-shape">

                        </div>
                        <div class="diamant-content"> A2 </div>
                    </div>
                    <h4> {% trans from 'about' %}about.year2{% endtrans %}  </h4>
                    <h3 class="titre-prog">{% trans from 'about' %} about.learn1 {% endtrans %}  </h3>
                    {% trans from 'anglais' %} learn {% endtrans %}
                </div>

                <div class="programme">
                    <div class="diamant">
                        <div class="diamant-shape">

                        </div>
                        <div class="diamant-content"> B1 </div>
                    </div>
                    <h4> {% trans from 'about' %}about.year3{% endtrans %} </h4>
                    <h3 class="titre-prog">{% trans from 'about' %} about.improve1 {% endtrans %}</h3>
                    {% trans from 'anglais' %} improve {% endtrans %}
                </div>

                <div class="programme">
                    <div class="diamant">
                        <div class="diamant-shape">

                        </div>
                        <div class="diamant-content"> B2 </div>
                    </div>
                    <h4>  {% trans from 'about' %}about.year4{% endtrans %} </h4>
                    <h3 class="titre-prog">{% trans from 'about' %} about.master1 {% endtrans %}</h3>
                    {% trans from 'anglais' %} master {% endtrans %}
                </div>

                <div class="programme">
                    <div class="diamant">
                        <div class="diamant-shape">

                        </div>
                        <div class="diamant-content"> C1 </div>
                    </div>
                    <h4>  {% trans from 'about' %}about.year5{% endtrans %} </h4>
                    <h3 class="titre-prog">{% trans from 'about' %} about.expert1 {% endtrans %}</h3>
                    {% trans from 'anglais' %} expert1 {% endtrans %}
                </div>

                <div class="programme">
                    <div class="diamant">
                        <div class="diamant-shape">

                        </div>
                        <div class="diamant-content"> C2 </div>
                    </div>
                    <h4>  {% trans from 'about' %}about.year6{% endtrans %} </h4>
                    <h3 class="titre-prog">{% trans from 'about' %} about.expert1 {% endtrans %}</h3>
                    {% trans from 'anglais' %} expert2 {% endtrans %}
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