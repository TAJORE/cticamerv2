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
                                <a href="/anglais/cours-intensifs"> {{ __('ctinav.CI') }} </a>
                                <a href="{{ ('main_FormationContinue') }}"> {{ __('ctinav.FC') }} </a>
                                <a href="{{  ('main_PourEntreprises') }}"> {{ __('ctinav.PE') }} </a>
                                <a href="{{  ('main_CoursDeVacances') }}"> {{ __('ctinav.CV') }} </a>
                                <a href="{{  ('main_CoursParticulier') }}"> {{ __('ctinav.CP') }} </a>
                            </div>

                        </li>

                        <li class="ctidropdown">
                            <a href="/allemand" class="dropbtn">
                                {{ __('ctinav.m_allemand') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="/allemand/pour_etudier"> {{ __('ctinav.etudeAll') }} </a>
                                <a href="/allemand/regroupement_familial"> {{ __('ctinav.regrFamill') }} </a>
                                <a href="/allemand/cours_particuliers_dallemand">  {{ __('ctinav.coursParti') }} </a>
                                <a href="/allemand/cours_specialises"> {{ __('ctinav.coursSpec') }}</a>

                            </div>
                        </li>


                        <li class="ctidropdown">
                            <a href="/informatique" class="dropbtn">
                                {{ __('ctinav.m_informatique') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="/informatique/bureautique"> {{ __('ctinav.logiBur') }}  </a>
                                <a href="{{  ('main_Design') }}"> {{ __('ctinav.art') }} </a>
                                <a href="{{  ('main_Internet') }}"> {{ __('ctinav.internet') }} </a>
                                <a href="{{  ('main_AppliWeb') }}"> {{ __('ctinav.appWeb') }} </a>
                                <a href="{{  ('main_SecuriteInfo') }}"> {{ __('ctinav.secuInfo') }} </a>
                                <a href="{{  ('main_CoursParticuliersdInfo') }}"> {{ __('ctinav.coursPartiInfo') }} </a>
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