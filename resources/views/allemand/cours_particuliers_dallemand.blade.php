@extends('layout')

@section('content')
<meta charset="utf-8">
<meta name = "description" content = "{% trans from 'cours-particuliers' %} descriptionPAR {% endtrans %}" >
<meta name = "keywords" content = "{% trans from 'cours-particuliers' %} keywordPAR {% endtrans %}" >
<meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    .baniere-img{
        width: 40%;
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

</style>

<div id="main_sousRubriqAngl">

    <div class="sous-menu">
        Cours Particuliers d'Allemand
    </div>

    <div class="flex-contain">

        <div class="left-nav">

            {% block left_nav %}
            {% include 'MainBundle:Inc:left_nav.html.twig' %}
            {% endblock %}

        </div>

        <div class="main-contain-middle">

            <div class="baniereb">

                <div class="img-et-msg-baniere">
                    <img class="baniere-img box-baniereb" src="{{ asset('data/img/coursParticulier.jpg') }}" alt="">
                    <div class="messages-baniere">
                        <div class="vertical">
                            <div class="baniere-msgb">
                                <h2>{% trans from 'cours-particuliers' %} coursPARangl {% endtrans %}</h2>

                            </div>

                            <div class="baniere-msg-2">
                                {% trans from 'cours-particuliers' %} object3 {% endtrans %}
                            </div>
                        </div>

                    </div>

                </div>

                <div class="lineb">
                    {% trans from 'cours-particuliers' %} servicePARTICULIERS {% endtrans %}
                </div>
            </div>

            <div class="cat-containerb">
                <div class="">
                    <div class="category-title">
                        <h3>{% trans from 'ctihome' %} prochaineRentree {% endtrans %}:
                            {% trans from 'ctihome' %} debutDesCours {% endtrans %}
                        </h3>
                    </div>
                    <div class="datecours">
                        <div class="annonce-inscription">
                            {% trans from 'ctihome' %} placesDISPO {% endtrans %}
                        </div>
                    </div>
                </div>
            </div>



            <div class="cat-container">
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="#"> {% trans from 'cours-particuliers' %} programSurMesur {% endtrans %} </a></h3>
                    </div>

                    <div class="category-desktop-contain">
                        {% trans from 'cours-particuliers' %} texte_01 {% endtrans %}
                        <ul>
                            <li>{% trans from 'cours-particuliers' %} detail_01 {% endtrans %}</li>
                            <li>{% trans from 'cours-particuliers' %} detail_02 {% endtrans %}</li>
                            <li>{% trans from 'cours-particuliers' %} detail_03 {% endtrans %}</li>
                            <li>{% trans from 'cours-particuliers' %} detail_04 {% endtrans %}</li>
                        </ul>
                        {% trans from 'cours-particuliers' %} texte_02 {% endtrans %}
                    </div>

                </div>
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="#"> {% trans from 'cours-particuliers' %} materielDIDAC {% endtrans %} </a></h3>
                    </div>
                    {% trans from 'cours-particuliers' %} texte_11 {% endtrans %}<br><br>
                    <ul>
                        <li>{% trans from 'cours-particuliers' %} detail_11 {% endtrans %}</li>
                        <li>{% trans from 'cours-particuliers' %} detail_12 {% endtrans %}</li>
                        <li>{% trans from 'cours-particuliers' %} detail_13 {% endtrans %}</li>
                    </ul>
                    <div class="category-desktop-contain">
                        <img class="manuels-angl-img" src="{{ asset('data/img/ASPEKTE2.jpg') }}">
                        <img class="manuels-angl-img" src="{{ asset('data/img/Aspekte-neu.jpg') }}">
                        <img class="manuels-angl-img" src="{{ asset('data/img/ASPEKTE1.jpg') }}">
                    </div>
                    <div class="category-desktop-contain">


                    </div>

                </div>


                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="#"> {% trans from 'cours-particuliers' %} approchCoach {% endtrans %} </a></h3>
                    </div>

                    {% trans from 'cours-particuliers' %} texte_21 {% endtrans %} <br>

                    <ul>
                        <li>{% trans from 'cours-particuliers' %} detail_21 {% endtrans %}</li>
                        <li>{% trans from 'cours-particuliers' %} detail_22 {% endtrans %}</li>
                        <li>{% trans from 'cours-particuliers' %} detail_23 {% endtrans %}</li>
                    </ul>


                </div>
                <div class="categorie">
                    <div class="category-title">
                        <h3> {% trans from 'cours-intensifs' %} diffNIV {% endtrans %} </h3>
                    </div>
                    <p> {% trans from 'cours-intensifs' %} phrase1 {% endtrans %} </p>
                    <p> {% trans from 'cours-intensifs' %} phrase2 {% endtrans %} </p>
                    <p> {% trans from 'cours-intensifs' %} phrase3 {% endtrans %} </p>
                </div>
            </div>

            <div class="cat-container">
                <div class="">
                    <div class="datecours annonce-inscription">
                        {% trans from 'ctihome' %} choixRENTREE {% endtrans %}
                    </div>
                    <table class="table02">
                        <tr>
                            <td class="abc"> {% trans from 'ctihome' %} rentree1 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree2 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree3 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree4 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree5 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree6 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree7 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree8 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree9 {% endtrans %}  </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree10 {% endtrans %} </td>
                            <td class="abc"> {% trans from 'ctihome' %} rentree11 {% endtrans %}  </td>
                        </tr>

                    </table>
                </div>
            </div>


            <div class="separator"></div>




        </div>
    </div>



    <div class="section programmes-main-div ">
        {% block ACTUALITE %}
        {% include 'MainBundle:Inc:actualites.html.twig' %}
        {% endblock %}

    </div>








</div>
@endsection