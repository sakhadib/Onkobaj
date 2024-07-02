@extends('layouts.math_main')

@section('title', '{!!$problem->title!!}')

@section('math_main')

<div class="vh-10"></div>
    <div class="vh-90 df aic" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 df dfc jcc">
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <h1 class="fs-1 hind" style="font-weight: 800;">{{$problem->title}}</h1>
                        </div>
                        <div class="col-md-4">
                            <h1 class="fs-1 text-danger text-end" style='font-family: "Play", sans-serif; font-weight: 800;' id="clock"></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="corr-box">
                                <h1 class="display-1 text-success noto text-center" id="cr"></h1>
                                <h1 class="fs-4 hind text-success text-center">
                                    <i class="uil uil-check-circle"></i> সঠিক
                                </h1>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="corr-box">
                                <h1 class="display-1 text-danger noto text-center" id="wr"></h1>
                                <h1 class="fs-4 hind text-danger text-center">
                                    <i class="uil uil-times-circle"></i> ভুল
                                </h1>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="corr-box">
                                <h1 class="display-1 text-dark noto text-center" id="tt"></h1>
                                <h1 class="fs-4 hind text-dark text-center">
                                    সর্বমোট
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 mt-5">
                    <div class="row mt-5">
                        <div class="col-12">
                            <h1 class="display-1 text-center noto" id="question"></h1>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-md-6 mt-3">
                            <button class="btn btn-outline-dark btn-lg w-100" style='font-size: 2.5rem; font-family: "Noto Sans Bengali", sans-serif;' id="op1" onclick="checkAnswer('op1')"></button>
                        </div>
                        <div class="col-12 col-md-6 mt-3">
                            <button class="btn btn-outline-dark btn-lg w-100" style='font-size: 2.5rem; font-family: "Noto Sans Bengali", sans-serif;' id="op2" onclick="checkAnswer('op2')"></button>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 col-md-6 mt-3">
                            <button class="btn btn-outline-dark btn-lg w-100" style='font-size: 2.5rem; font-family: "Noto Sans Bengali", sans-serif;' id="op3" onclick="checkAnswer('op3')"></button>
                        </div>
                        <div class="col-12 col-md-6 mt-3">
                            <button class="btn btn-outline-dark btn-lg w-100" style='font-size: 2.5rem; font-family: "Noto Sans Bengali", sans-serif;' id="op4" onclick="checkAnswer('op4')"></button>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 df jcc">
                            <button class="btn btn-lg" id="help" style="background-color: rgba(0,0,0,0.1); margin-right: 10px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-regular fa-lightbulb"></i> HELP
                            </button>
                            <form action="/math/submit/{{$problem->slug}}" method="post">
                                @csrf
                                <input type="text" name="slug" id="islug" hidden>
                                <input type="number" name="correct" id="icr" hidden>
                                <input type="number" name="incorrect" id="iincr" hidden>
                                <input type="date" name="date" id="idate" hidden>
                                <input type="time" name="time" id="itime" hidden>
                                <button class="btn btn-lg btn-success" type="submit" id="submit-btn">
                                    <i class="fa-sharp fa-solid fa-shuttle-space"></i> SUBMIT
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <textarea hidden name="" id="text">{{$problem->description}}</textarea>


    <div class="vh-10"></div>


    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
            <div class="markdown-here" id="content"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    <style>
        .corr-box {
            background-color: #edf1f4;
            border-radius: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .markdown-here{
            font-family: "Noto Sans Bengali", sans-serif;
        }
    </style>


@if($problem->css != 'none')
    <style>
        {!! $problem->css !!}
    </style>
@endif

<script>
    
</script>


<script>
let correctAnswer;
let rightCount = 0;
let wrongCount = 0;
let totalCount = 0;

function getRandomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function updateQuestion() {
    const { questionText, answer, options } = generateQuestionAndOptions();
    document.getElementById("question").textContent = questionText;

    correctAnswer = convertToBanglaNumber(answer);
    setOptions(options);

    updateScoreboard();
}

function setOptions(options) {
    shuffleArray(options);

    for (let i = 0; i < 4; i++) {
        document.getElementById(`op${i + 1}`).textContent = options[i];
    }
}

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

function checkAnswer(selectedOptionId) {
    const selectedAnswer = document.getElementById(selectedOptionId).innerText;
    if (selectedAnswer === correctAnswer) {
        rightCount++;
    } else {
        wrongCount++;
    }
    totalCount++;
    updateScoreboard();
    updateQuestion();
}

function updateScoreboard() {
    document.getElementById("cr").textContent = convertToBanglaNumber(rightCount);
    document.getElementById("wr").textContent = convertToBanglaNumber(wrongCount);
    document.getElementById("tt").textContent = convertToBanglaNumber(totalCount);
    document.getElementById("icr").value = rightCount;
    document.getElementById("iincr").value = wrongCount;
}

function convertToBanglaNumber(number) {
    const banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return number.toString().split('').map(digit => banglaDigits[parseInt(digit)]).join('');
}

window.onload = function() {
    updateQuestion();
    
    let startTime = Date.now();

    document.getElementById('idate').value = new Date().toISOString().slice(0, 10);
    document.getElementById('itime').value = new Date().toISOString().slice(11, 16);

    function updateClock() {
        let elapsedTime = Date.now() - startTime;
        let hours = Math.floor(elapsedTime / (1000 * 60 * 60));
        let minutes = Math.floor((elapsedTime % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((elapsedTime % (1000 * 60)) / 1000);

        hours = String(hours).padStart(2, '0');
        minutes = String(minutes).padStart(2, '0');
        seconds = String(seconds).padStart(2, '0');

        document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
    }

    setInterval(updateClock, 1000);
};

{!! $problem->js !!}

</script>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to convert Markdown to HTML using marked library
        function convertMarkdownToHtml() {
            var markdownContent = document.getElementById('text').value;
            var htmlContent = marked.parse(markdownContent);
            document.getElementById('content').innerHTML = htmlContent;
        }

        function updateMathPreview() {
            const content = document.getElementById('content');
            const contentWithLineBreaks = content.innerHTML.replace(/\n/g, '<br>');

            content.innerHTML = contentWithLineBreaks;

            // Update MathJax rendering
            MathJax.texReset();
            MathJax.typesetClear();
            MathJax.typesetPromise([content]);
        }

        // Event listener for the HELP button to trigger conversion and show modal
        document.getElementById('help').addEventListener('click', function() {
            convertMarkdownToHtml();
            updateMathPreview();
        });
    });
</script>

@endsection