@extends('layout')

@section('content')
    <div id="main_nousContacter">
        <div class="flexContainer">
            <h1 class="titre01">   {{ __('nous-contacter.ContacterNous') }} </h1>
            <div class="box-container">
                <div class="title">   {{ __('nous-contacter.EcriverNous') }} </div>
                <div>
                    {{ __('nous-contacter.instruction01') }}
                </div>
                <form action="" id="msgForm">
                    <div class="input-box">
                        <span > Email : * :</span><br>
                        <input type="text" class="input-elt" id="usMail" size="35" name="EMAIL" >
                        <p id="errEmail" class="error"></p>
                    </div>
                    <div class="input-box">
                        <span> {{ __('nous-contacter.nom') }} </span><br>
                        <input type="text" class="input-elt" id="usName" name="NOM" >
                        <p id="errName" class="error"></p>
                    </div>
                    <div class="input-box">
                        <span> {{ __('nous-contacter.phone') }}</span><br>
                        <input type="text" class="input-elt" placeholder="+237 xxxxxxxxx" id="usPhone" name="PHONE" >
                        <p id="errPhone" class="error"></p>
                    </div>
                    <div class="input-box">
                        <span> {{ __('nous-contacter.msg') }}</span><br>
                        <textarea name="messag" id="usMsg" rows="3" class="input-elt" placeholder="Votre message ici (150 mots maximum)" >  </textarea>

                    </div>
                    <p id="erMsg" class="error"></p>
                    <div class="input-details">
                        {{ __('nous-contacter.confidentialite') }}

                    </div>
                    <input type="submit" value="Envoyer" class="input-submit">
                    <Br/>


                </form>

            </div>


            <h1 class="titre02">  {{ __('nous-contacter.nousVoir') }} </h1>
            <div class="situation">
                <p>
                    {{ __('nous-contacter.localisation') }}
                </p>
                <a href="" >
                    {{ __('nous-contacter.horaires') }}
                </a>
            </div>

            <div id="confirm-message">
                <div> <span class="msgitem">Email: </span> </span><span id="respMail"></span></div>
                <div> <span class="msgitem">Name: </span> <span id="respName"></span></div>
                <div> <span class="msgitem">Phone: </span> <span id="respPhone"></span></div>
                <div> <span class="msgitem">Message: </span> </div>
                <span id="respMsg"></span>
            </div>

        </div>

    </div>
@endsection