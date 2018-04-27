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

    (function() {
        var questions = [{
            question: "When can we meet again?",
            choices: ["When are you free?", "It was two days ago.", "Can you help me?"],
            correctAnswer: 0
        },

            {
                question: "My aunt is going to stay with me.",
                choices: ["How do you do?", "How long for?", "How was it?"],
                correctAnswer: 1
            }, {
                question: "When do you study?",
                choices: ["at school", "in the evenings", "in the library"],
                correctAnswer: 1
            }, {
                question: "Would you prefer lemonade or orange juice?",
                choices: ["Have you got anything else ?", "If you like.", "Are you sure about that ?"],
                correctAnswer: 0
            }, {
                question: "Let's have dinner now.",
                choices: ["You aren't eating.", "There aren't any.", "Tom isn't here yet"],
                correctAnswer: 1
            }, {
                question: "The snow was ...... heavily when I left the house.",
                choices: ["Dropping", "Landing", "Falling", "Descending"],
                correctAnswer: 2
            }];

        var questionCounter = 0; //Tracks question number
        var selections = []; //Array containing user choices
        var quiz = $('#quiz'); //Quiz div object

        // Display initial question
        displayNext();

        // Click handler for the 'next' button
        $('#next').on('click', function (e) {
            e.preventDefault();

            // Suspend click listener during fade animation
            if(quiz.is(':animated')) {
                return false;
            }
            choose();

            // If no user selection, progress is stopped
            if (isNaN(selections[questionCounter])) {
                alert('Please make a selection!');
            } else {
                questionCounter++;
                displayNext();
            }
        });

        // Click handler for the 'prev' button
        $('#prev').on('click', function (e) {
            e.preventDefault();

            if(quiz.is(':animated')) {
                return false;
            }
            choose();
            questionCounter--;
            displayNext();
        });

        // Click handler for the 'Start Over' button
        $('#start').on('click', function (e) {
            e.preventDefault();

            if(quiz.is(':animated')) {
                return false;
            }
            questionCounter = 0;
            selections = [];
            displayNext();
            $('#start').hide();
        });

        // Animates buttons on hover
        $('.button').on('mouseenter', function () {
            $(this).addClass('active');
        });
        $('.button').on('mouseleave', function () {
            $(this).removeClass('active');
        });

        // Creates and returns the div that contains the questions and
        // the answer selections
        function createQuestionElement(index) {
            var qElement = $('<div>', {
                id: 'question'
            });

            var header = $('<h2>Question ' + (index + 1) + ':</h2>');
            qElement.append(header);

            var question = $('<p>').append(questions[index].question);
            qElement.append(question);

            var radioButtons = createRadios(index);
            qElement.append(radioButtons);

            return qElement;
        }

        // Creates a list of the answer choices as radio inputs
        function createRadios(index) {
            var radioList = $('<ul>');
            var item;
            var input = '';
            for (var i = 0; i < questions[index].choices.length; i++) {
                item = $('<li>');
                input = '<input type="radio" name="answer" value=' + i + ' />';
                input += questions[index].choices[i];
                item.append(input);
                radioList.append(item);
            }
            return radioList;
        }

        // Reads the user selection and pushes the value to an array
        function choose() {
            selections[questionCounter] = +$('input[name="answer"]:checked').val();
            console.log("The selected answewer is: ", selections[questionCounter]);
        }

        // Displays next requested element
        function displayNext() {
            quiz.fadeOut(function() {
                $('#question').remove();

                if(questionCounter < questions.length){
                    var nextQuestion = createQuestionElement(questionCounter);
                    quiz.append(nextQuestion).fadeIn();
                    if (!(isNaN(selections[questionCounter]))) {
                        $('input[value='+selections[questionCounter]+']').prop('checked', true);
                    }

                    // Controls display of 'prev' button
                    if(questionCounter === 1){
                        $('#prev').show();
                    } else if(questionCounter === 0){

                        $('#prev').hide();
                        $('#next').show();
                    }
                }else {
                    var scoreElem = displayScore();
                    quiz.append(scoreElem).fadeIn();
                    $('#next').hide();
                    $('#prev').hide();
                    $('#start').show();
                }
            });
        }

        // Computes score and returns a paragraph element to be displayed
        function displayScore() {
            var score = $('<p>',{id: 'question'});

            var numCorrect = 0;
            for (var i = 0; i < selections.length; i++) {
                if (selections[i] === questions[i].correctAnswer) {
                    numCorrect++;
                }
            }

            score.append('You got ' + numCorrect + ' questions out of ' +
                    questions.length + ' right!!!');
            return score;
        }
    })();


</script>
@endsection
