@extends('layout')

@section('content')
    {% block meta %}
    <meta charset="utf-8">
    <meta name = "description" content = "{% trans from 'etudes-allemagne' %} descriptionEtudALL {% endtrans %}" >
    <meta name = "keywords" content = "{% trans from 'etudes-allemagne' %} keywordEtudALL {% endtrans %}" >
    <meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {% endblock %}
    {% block title %}
    {% trans from 'about' %} about.title {% endtrans %}
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

    </style>
    {# mettre le css si la page t'oublige #}
    {% endblock %}
    {% block header %}
    {% include 'MainBundle:CTI:first-nav.html.twig' %}
    {% include 'MainBundle:CTI:mobile-nav.html.twig' %}
    {% include 'MainBundle:Default:cti-navbar.html.twig' %}


    {% endblock %}

<div id="main_pour_etudier">

    <div class="sous-menu">
        Pour étudier en Allemagne
    </div>
    <div class="flex-contain">

        <div class="left-nav">

            {% block left_nav %}
            {% include 'MainBundle:Inc:left_nav.html.twig' %}
            {% endblock %}
        </div>

        <div class="main-contain-middle">

            <div class="baniere cat-container">

                <img class="baniere-img box-baniere" src="{{ asset('data/img/students1.jpg') }}" alt="">

                <div class="baniere-msg box-baniere ">
                    <h2>{% trans from 'allemand' %} title1 {% endtrans %}</h2> <BR>
                    {% trans from 'allemand' %} text1 {% endtrans %}
                </div>

                <!--
                    <div id="about_top" style="background-image:url('{{ asset('data/img/about4.jpg') }}')">

                        {# il  est possible de travailler directement  ici. si  vous voulez occuper toute la page dans la width #}
                    </div>
-->

            </div>

            <div class="row line">
                <div>  {% trans from 'allemand' %} text2 {% endtrans %} </div>

            </div>



            <div class="cat-container">
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="{{ __('main_allemand') }}">COURS D'ALLEMAND POUR ETUDE OU SEJOUR EN ALLEMAGNE</a></h3>
                    </div>
                    <div class="datecours">
                        {% trans from 'ctihome' %} prochaineRentree {% endtrans %}:
                        {% trans from 'ctihome' %} debutDesCours {% endtrans %}
                    </div>

                    <div class="annonce-inscription">
                        Les Inscriptions sont en cour. Il y a encore quelques places disponibles.
                    </div>

                    <div class="category-desktop-contain">
                        Le Churchill Training Institute offres des cours de langue allemande aux jeunes souhaitant étudier en Allemagne.
                        Nous préparons les candidats aux examens de langue allemande Nécessaires pour obtenir un visa étudiant
                        ( Goethe-Zertifikat A1: Start Deutsch1, Goethe-Zertifikat B1, Goethe-Zertifikat B2, Test-DaF) offerts par l’Institut-Goethe à Yaoundé.<br/>
                        <a href="/ile/Views/allemand_prepa_exam.php">plus d'informations sont disponible sur la page speciale allemand</a>
                    </div>

                </div>
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="{{ __('main_anglais') }}"> MANUELS REQUIS </a></h3>
                    </div>
                    Pour votre formation, vous avez droit aux meilleurs manuels d'apprentissage; principalement les manuels des collections MENSCHEN et Aspekte.<br>
                    Nos cours sont conçus d’après le Cadre Européen Commun de Référence pour les Langues (CECR).<br>
                    <div class="category-desktop-contain">
                        <ul>
                            <li>Goethe Zertifikat A1 (Start Deutsch 1): Menschen A1, 2 mois + sessions pratiques</li>
                            <li>Goethe Zertifikat A2 : Menschen A2, 2 mois + sessions pratiques</li>
                            <li>Goethe Zertifikat B1 : Aspekte B1, 2 mois + sessions pratiques</li>
                            <li>Goethe Zertifikat B2 : Aspekte B2, 2 mois + sessions pratiques</li>
                            <li>Goethe Zertifikat C1 : Aspekte C1, 2 mois + sessions pratiques</li>
                        </ul>
                        NB: Seuls les niveaux A1, A2 et B1 sont requis pour obtenir un visa
                        <br>
                        La qualité de nos formation garantit votre succès aux examens de langue Allemande organisés par le Goetthe Institut à Yaoundé: Goethe-zertifikat A1, A2, B1.
                    </div>
                    <div class="category-desktop-contain">
                        <img class="manuels-img" src="{{ asset('data/img/menschen-a1.jpg') }}">
                        <img class="manuels-img" src="{{ asset('data/img/menschen-a2.1.jpg') }}">
                        <img class="manuels-img" src="{{ asset('data/img/ASPEKTE1.jpg') }}">
                        <img class="manuels-img" src="{{ asset('data/img/ASPEKTE2.jpg') }}">
                        <img class="manuels-img" src="{{ asset('data/img/Aspekte-neu.jpg') }}">

                    </div>

                </div>


                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="{{ __('main_informatique') }}">HORAIRES DE COURS</a></h3>
                    </div>

                    Choisissez vos heures de cours en fonction de votre disponibilité. <br>

                    <div class="">
                        <div class=" horaire ">
                            <div class="news-title"><h4>Matinées</h4></div>

                            <div class="news-title"><p>08H00 - 10h30</p></div>
                        </div>

                        <div class=" horaire ">
                            <div class="news-title"><h4>Après-midi</h4></div>

                            <div class="news-title"><p>14H00 - 16h30</p></div>
                        </div>

                        <div class="horaire">
                            <div class="news-title"><h4>Cours du Soirs</h4></div>

                            <div class="news-title"><p>18H30 - 21h00</p></div>
                        </div>

                    </div>


                </div>
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="{{ __('main_anglais') }}">Cours aux particuliers</a></h3>
                    </div>
                    Cours basés sur des contenus particuliers, destinés à des groupes-cibles spéciaux ou pour l’exercice d’aptitudes uniques: <br><br>
                    N’hésitez pas à nous contacter si vous souhaitez suivre une formation à la carte dans un de nos domaines de compétence.
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