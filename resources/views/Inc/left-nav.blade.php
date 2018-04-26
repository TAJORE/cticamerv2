
<div class="left-nav-contain">
    <div class="titre_lef-nav">{{ __('left-nav.title') }} </div>

    <div class="sous-titre-lef-nav" id="sous-titre-lef-nav-an"><h4>{% trans from 'left-nav' %} CoursANGL {% endtrans %}</h4></div>
    <div class="sous-titre-contenu" id="sous-titre-anglais">
        <div class="left-nav-text">
            {% trans from 'left-nav' %} TexteANGL {% endtrans %}
        </div>
        <div class="left-nav-links">
            <a href="{{ ('main_CoursIntensifs') }}">  {{ __('ctinav.CI') }} </a>
            <a href="{{ ('main_FormationContinue') }}"> {% trans from 'ctinav' %} FC {% endtrans %} </a>
            <a href="{{  ('main_PourEntreprises') }}"> {% trans from 'ctinav' %} PE {% endtrans %} </a>
            <a href="{{  ('main_CoursDeVacances') }}"> {% trans from 'ctinav' %} CV {% endtrans %} </a>
            <a href="{{  ('main_CoursParticulier') }}"> {% trans from 'ctinav' %} CP {% endtrans %} </a>

        </div>
    </div>
    <div class="sous-titre-lef-nav" id="sous-titre-lef-nav-al"><h4>{{ __('left-nav.CoursALL') }} </h4></div>
    <div class="sous-titre-contenu" id="left-nav-al-cont">
        <div class="left-nav-text">
            {% trans from 'left-nav' %} TexteALL {% endtrans %}
        </div>
        <div class="left-nav-links">
            <a href="{{  ('main_etudierEnAllemagne') }}"> {% trans from 'ctinav' %} etudeAll {% endtrans %} </a>
            <a href="{{  ('main_regroupementFamilial') }}"> {% trans from 'ctinav' %} regrFamill {% endtrans %} </a>
            <a href="{{  ('main_CoursParticuliersdAll') }}"> {% trans from 'ctinav' %} coursParti {% endtrans %} </a>

        </div>
    </div>
    <div class="sous-titre-lef-nav" id="sous-titre-lef-nav-it"><h4> {{ __('left-nav.CoursINFO') }}</h4></div>
    <div class="sous-titre-contenu" id="left-nav-it-cont">
        <div class="left-nav-text">
            {% trans from 'left-nav' %} TexteINFO {% endtrans %}

        </div>
        <div class="left-nav-links">
            <a href="{{  ('main_LogicielsBureautique') }}"> {% trans from 'ctinav' %} logiBur {% endtrans %} </a>
            <a href="{{  ('main_Design') }}"> {% trans from 'ctinav' %} art {% endtrans %} </a>
            <a href="{{  ('main_Internet') }}"> {% trans from 'ctinav' %} internet {% endtrans %} </a>
            <a href="{{  ('main_AppliWeb') }}"> {% trans from 'ctinav' %} appWeb {% endtrans %}  </a>
            <a href="{{  ('main_SecuriteInfo') }}"> {% trans from 'ctinav' %} secuInfo {% endtrans %} </a>
            <a href="{{  ('main_CoursParticuliersdInfo') }}"> {% trans from 'ctinav' %} coursPartiInfo {% endtrans %} </a>

        </div>
    </div>

</div>