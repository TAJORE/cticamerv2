@extends('layout')

@section('content')
<div id='container'>
    <div id='title'>
        <h1>Test de Niveau d'Anglais CTI</h1>
    </div>
    <br/>
    <div id='quiz'></div>
    <div class='button' id='next'><a href='#'>Next</a></div>
    <div class='button' id='prev'><a href='#'>Prev</a></div>
    <div class='button' id='start'> <a href='#'>Start Over</a></div>
    <!-- <button class='' id='next'>Next</a></button>
    <button class='' id='prev'>Prev</a></button>
    <button class='' id='start'> Start Over</a></button> -->
</div>

<script>

    !function(){var e=[{question:"When can we meet again?",choices:["When are you free?","It was two days ago.","Can you help me?"],correctAnswer:0},{question:"My aunt is going to stay with me.",choices:["How do you do?","How long for?","How was it?"],correctAnswer:1},{question:"When do you study?",choices:["at school","in the evenings","in the library"],correctAnswer:1},{question:"Would you prefer lemonade or orange juice?",choices:["Have you got anything else ?","If you like.","Are you sure about that ?"],correctAnswer:0},{question:"Let's have dinner now.",choices:["You aren't eating.","There aren't any.","Tom isn't here yet"],correctAnswer:1},{question:"The snow was ...... heavily when I left the house.",choices:["Dropping","Landing","Falling","Descending"],correctAnswer:2}],n=0,t=[],o=$("#quiz");function i(n){var t=$("<div>",{id:"question"}),o=$("<h2>Question "+(n+1)+":</h2>");t.append(o);var i=$("<p>").append(e[n].question);t.append(i);var a=function(n){for(var t,o=$("<ul>"),i="",a=0;a<e[n].choices.length;a++)t=$("<li>"),i='<input type="radio" name="answer" value='+a+" />",i+=e[n].choices[a],t.append(i),o.append(t);return o}(n);return t.append(a),t}function a(){t[n]=+$('input[name="answer"]:checked').val(),console.log("The selected answewer is: ",t[n])}function r(){o.fadeOut(function(){if($("#question").remove(),n<e.length){var a=i(n);o.append(a).fadeIn(),isNaN(t[n])||$("input[value="+t[n]+"]").prop("checked",!0),1===n?$("#prev").show():0===n&&($("#prev").hide(),$("#next").show())}else{var r=function(){for(var n=$("<p>",{id:"question"}),o=0,i=0;i<t.length;i++)t[i]===e[i].correctAnswer&&o++;return n.append("You got "+o+" questions out of "+e.length+" right!!!"),n}();o.append(r).fadeIn(),$("#next").hide(),$("#prev").hide(),$("#start").show()}})}r(),$("#next").on("click",function(e){if(e.preventDefault(),o.is(":animated"))return!1;a(),isNaN(t[n])?alert("Please make a selection!"):(n++,r())}),$("#prev").on("click",function(e){if(e.preventDefault(),o.is(":animated"))return!1;a(),n--,r()}),$("#start").on("click",function(e){if(e.preventDefault(),o.is(":animated"))return!1;n=0,t=[],r(),$("#start").hide()}),$(".button").on("mouseenter",function(){$(this).addClass("active")}),$(".button").on("mouseleave",function(){$(this).removeClass("active")})}();

</script>

@endsection
