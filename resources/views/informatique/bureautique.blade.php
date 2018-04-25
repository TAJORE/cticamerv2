@extends('layout')

@section('content')
<meta charset="utf-8">
<meta name = "description" content = "{% trans from 'bureautique' %} descriptionBureautiq {% endtrans %}" >
<meta name = "keywords" content = "{% trans from 'bureautique' %} keywordBureautiq {% endtrans %}" >
<meta name="author" content="semanticatechnologies.com - Douala Bonamoussadi">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div id="main_bureautique">

    <div class="sous-menu">
        {{ __('bureautique.logicielDeBUREAU') }}
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
                    <img class="baniere-img box-baniereb"     src="{{ URL::asset('img/secretaire.jpg') }}"  alt="">
                    <div class="messages-baniere">
                        <div class="vertical">
                            <div class="baniere-msgb ">
                                <h2> {{ __('bureautique.secretBUR') }}</h2>

                            </div>

                            <div class="baniere-msg-2">
                                {{ __('bureautique.objectif') }}
                            </div>
                        </div>

                    </div>

                </div>





                <div class="lineb">
                    {{ __('bureautique.atout') }}
                </div>

            </div >



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
                        <h3><a href="#"> {% trans from 'bureautique' %} SecreBUREAU {% endtrans %} </a></h3>
                    </div>
                    <div class="importante"> {{ __('bureautique.Freq_01') }} </div>

                    <div class="datecours">
                        {{ __('bureautique.detail_01') }}
                    </div>

                    <div class="annonce-inscription but">
                        {{ __('bureautique.messag_01') }}
                    </div>

                    <div class="category-desktop-contain">
                        <table class="table01">
                            <tr>
                                <th> {% trans from 'bureautique' %} Element_01 {% endtrans %}  </th>
                                <td>
                                    <ul>
                                        <li>{{ __('bureautique.module_01') }} </li>
                                        <li>{% trans from 'bureautique' %} module_02 {% endtrans %}</li>
                                        <li>{% trans from 'bureautique' %} module_03 {% endtrans %}</li>
                                        <li>{% trans from 'bureautique' %} module_04 {% endtrans %}</li>
                                        <li>{% trans from 'bureautique' %} module_05 {% endtrans %}</li>
                                        <li>{% trans from 'bureautique' %} module_06 {% endtrans %}</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <th> {% trans from 'bureautique' %} Element_02 {% endtrans %}  </th>
                                <td> {% trans from 'bureautique' %} Duree_01 {% endtrans %} </td>
                            </tr>
                            <tr>
                                <th> {% trans from 'bureautique' %} Element_03 {% endtrans %}  </th>
                                <td> {% trans from 'bureautique' %} Freq_01 {% endtrans %} </td>
                            </tr>

                        </table>
                    </div>

                </div>
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="#"> {{ __('bureautique.LogicielBUREAU') }}  </a></h3>
                    </div>
                    <div class="importante"> {% trans from 'bureautique' %} Frequ_02 {% endtrans %} </div>

                    <div class="datecours">
                        {% trans from 'bureautique' %} detail_02 {% endtrans %}
                    </div>

                    <div class="annonce-inscription but">
                        {{ __('bureautique.messag_02') }}
                    </div>

                    <div class="category-desktop-contain">
                        <table class="table01">
                            <tr>
                                <th> {% trans from 'bureautique' %} Element_11 {% endtrans %}  </th>
                                <td>
                                    <ul>
                                        <li>{% trans from 'bureautique' %} module_11 {% endtrans %}</li>
                                        <li>{% trans from 'bureautique' %} module_12 {% endtrans %}</li>
                                        <li>{% trans from 'bureautique' %} module_13 {% endtrans %}</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <th> {% trans from 'bureautique' %} Element_12 {% endtrans %}  </th>
                                <td> {% trans from 'bureautique' %} Duree_11 {% endtrans %} </td>
                            </tr>
                            <tr>
                                <th> {% trans from 'bureautique' %} Element_13 {% endtrans %}  </th>
                                <td> {% trans from 'bureautique' %} Frequ_02 {% endtrans %} </td>
                            </tr>

                        </table>                        </div>

                </div>


                <div class="categorie">
                    <div class="category-title">
                        <h3> {% trans from 'cours-intensifs' %} HORAIRES {% endtrans %} </h3>
                    </div>

                    {% trans from 'cours-intensifs' %} messagHORAIRE {% endtrans %}

                    <div class="">
                        <div class=" horaire ">
                            <div class="news-title"><h4>{% trans from 'cours-intensifs' %} periode1 {% endtrans %}</h4></div>

                            <div class="news-title"><p>{% trans from 'cours-intensifs' %} heures1 {% endtrans %} </p></div>
                        </div>

                        <div class=" horaire ">
                            <div class="news-title"><h4>{% trans from 'cours-intensifs' %} periode2 {% endtrans %}</h4></div>

                            <div class="news-title"><p>{% trans from 'cours-intensifs' %} heures2 {% endtrans %}</p></div>
                        </div>

                        <div class="horaire">
                            <div class="news-title"><h4>{% trans from 'cours-intensifs' %} periode3 {% endtrans %}</h4></div>

                            <div class="news-title"><p>{% trans from 'cours-intensifs' %} heures3 {% endtrans %}</p></div>
                        </div>

                    </div>


                </div>
                <div class="categorie">
                    <div class="category-title">
                        <h3><a href="{{ ('main_CoursParticulier') }}">{% trans from 'formation-continu' %} crsParti {% endtrans %}</a></h3>
                    </div>
                    {% trans from 'formation-continu' %} presentationCoursParti {% endtrans %}
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