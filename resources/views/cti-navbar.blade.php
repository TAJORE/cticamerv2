<div id="cti-nav">
    <div class="ctic-nav" >
        <div class="nav-and-logo">
            <div class="logo">
                <a href="{{ ('main_homepage') }}">  <img  src="{{ URL::asset('img/logo3.jpg') }}"> </a>
            </div>

            <div class="nav_bar">
                <div class="slogan">{{ __('ctinav.slogan') }} </div>
                <div class="nav-items">
                    <ul>
                        <li>
                            <a href="{{ ('main_homepage') }}" class="dropbtn">
                                CTI-CM
                            </a>

                        </li>
                        <li class="ctidropdown">
                            <a href="/anglais" class="dropbtn">
                                {{ __('ctinav.m_anglais') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="{{ ('main_CoursIntensifs') }}"> {{ __('ctinav.CI') }} </a>
                                <a href="{{ ('main_FormationContinue') }}"> {% trans from 'ctinav' %} FC {% endtrans %} </a>
                                <a href="{{  ('main_PourEntreprises') }}"> {% trans from 'ctinav' %} PE {% endtrans %} </a>
                                <a href="{{  ('main_CoursDeVacances') }}"> {% trans from 'ctinav' %} CV {% endtrans %} </a>
                                <a href="{{  ('main_CoursParticulier') }}"> {% trans from 'ctinav' %} CP {% endtrans %} </a>
                            </div>

                        </li>

                        <li class="ctidropdown">
                            <a href="/allemand" class="dropbtn">
                                {{ __('ctinav.m_allemand') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="{{  ('main_etudierEnAllemagne') }}"> {{ __('ctinav.etudeAll') }} </a>
                                <a href="{{  ('main_regroupementFamilial') }}"> {{ __('ctinav.regrFamill') }} </a>
                                <a href="/allemand/cours_particuliers">  {{ __('ctinav.coursParti') }} </a>
                                <!--
                                <a href="{{  ('main_CoursSpecialise') }}"> {% trans from 'ctinav' %} coursSpec {% endtrans %} </a>
                                -->
                            </div>
                        </li>


                        <li class="ctidropdown">
                            <a href="/informatique" class="dropbtn">
                                {{ __('ctinav.m_informatique') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="/informatique/bureautique"> {{ __('ctinav.logiBur') }}  </a>
                                <a href="{{  ('main_Design') }}"> {% trans from 'ctinav' %} art {% endtrans %} </a>
                                <a href="{{  ('main_Internet') }}"> {% trans from 'ctinav' %} internet {% endtrans %} </a>
                                <a href="{{  ('main_AppliWeb') }}"> {% trans from 'ctinav' %} appWeb {% endtrans %}  </a>
                                <a href="{{  ('main_SecuriteInfo') }}"> {% trans from 'ctinav' %} secuInfo {% endtrans %} </a>
                                <a href="{{  ('main_CoursParticuliersdInfo') }}"> {% trans from 'ctinav' %} coursPartiInfo {% endtrans %} </a>
                            </div>
                        </li>

                        <li class="ctidropdown">
                            <a href="{{  ('main_CoursDeVacances') }}"> {{ __('ctinav.CV_T') }} </a>

                        </li>

                        <li class="ctidropdown">
                            <a href="{{ ('main_contactEtHoraires') }}" class="dropbtn">
                                {{ __('ctinav.m_contact') }}
                            </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>