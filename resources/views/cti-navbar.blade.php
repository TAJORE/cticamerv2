<div id="cti-nav">
    <div class="ctic-nav" >
        <div class="nav-and-logo">
            <div class="logo">
                <a href="/">  <img  src="{{ URL::asset('img/logo3.jpg') }}"> </a>
            </div>

            <div class="nav_bar">
                <div class="slogan">{{ __('ctinav.slogan') }} </div>
                <div class="nav-items">
                    <ul>
                        <li>
                            <a href="/" class="dropbtn">
                                CTI-CM
                            </a>

                        </li>
                        <li class="ctidropdown">
                            <a href="/anglais" class="dropbtn">
                                {{ __('ctinav.m_anglais') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="/anglais/cours-intensifs"> {{ __('ctinav.CI') }} </a>
                                <a href="/anglais/formation-continue"> {{ __('ctinav.FC') }} </a>
                                <a href="/anglais/pour-entreprise"> {{ __('ctinav.PE') }} </a>
                                <a href="/anglais/cours-de-vacances"> {{ __('ctinav.CV') }} </a>
                                <a href="/anglais/cours-particuliers"> {{ __('ctinav.CP') }} </a>
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
                            </div>
                        </li>


                        <li class="ctidropdown">
                            <a href="/informatique" class="dropbtn">
                                {{ __('ctinav.m_informatique') }}
                            </a>

                            <div class="dropdown-content">
                                <a href="/informatique/bureautique"> {{ __('ctinav.logiBur') }}  </a>
                                <a href="/informatique/infographie-design-media"> {{ __('ctinav.art') }} </a>
                                <a href="/informatique/utilisation-d-internet"> {{ __('ctinav.internet') }} </a>
                                <a href="/informatique/developpement-web"> {{ __('ctinav.appWeb') }} </a>
                                <a href="/informatique/securite-informatique"> {{ __('ctinav.secuInfo') }} </a>
                                <a href="/informatique/cours-particuliers"> {{ __('ctinav.coursPartiInfo') }} </a>
                            </div>
                        </li>

                        <li class="ctidropdown">
                            <a href="/anglais/cours-de-vacances"> {{ __('ctinav.CV_T') }} </a>

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