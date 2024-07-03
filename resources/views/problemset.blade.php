@extends('layouts.main')

@section('title', 'Problemset')

@section('main')

<div class="vh-10"></div>

<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h1 class="display-1 hind text-center">
                অঙ্করাজ্যে তোমাকে স্বাগতম
            </h1>
            <p class="lead hind text-center">
                তোমার শ্রেণি বাছাই কর এবং তোমার জন্য অপেক্ষা করছে ওযুত ওযুত, নিযুত নিযুত অঙ্ক। তাদের সমাধান করতেই হবে তোমাকে। 
            </p>
        </div>
        <div class="col-12 mt-3 df jcc">
            <a href="/rules" class="btn btn-lg btn-outline-dark" style="font-family: 'Hind Siliguri', sans-serif">নিয়মকানুন দেখে নিই</a> 
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="class cli1 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">প্রথম শ্রেণি</h1>
                    <a href="/problemset/1" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli2 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">দ্বিতীয় শ্রেণি</h1>
                    <a href="/problemset/2" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli3 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">তৃতীয় শ্রেণি</h1>
                    <a href="/problemset/3" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli4 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">চতুর্থ শ্রেণি</h1>
                    <a href="/problemset/4" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli5 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">পঞ্চম শ্রেণি</h1>
                    <a href="/problemset/5" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli6 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">ষষ্ঠ শ্রেণি</h1>
                    <a href="/problemset/6" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli7 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">সপ্তম শ্রেণি</h1>
                    <a href="/problemset/7" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli8 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">অষ্টম শ্রেণি</h1>
                    <a href="/problemset/8" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="class cli9 mt-4">
                <div class="box">
                    <h1 class="text-center hind text-light display-3">নবম-দশম শ্রেণি</h1> 
                    <a href="/problemset/9" class="btn btn-lg btn-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্ক দেখুন</a>
                </div>
            </div>
        </div>
    </div>
</div>







<style>
    .box{
        min-height: 30vh;
        width: 100%;
        backdrop-filter: brightness(0.2);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
        transition: 0.5s ease-in-out;
    }

    .class{
        background-size: cover;
        background-position: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        overflow: hidden;
    }

    .cli1{
        background-image: url('/class/1.jpg');
    }
    .cli2{
        background-image: url('/class/2.jpeg');
    }
    .cli3{
        background-image: url('/class/3.webp');
    }
    .cli4{
        background-image: url('/class/4.jpeg');
    }
    .cli5{
        background-image: url('/class/5.jpg');
    }
    .cli6{
        background-image: url('/class/6.png');
    }
    .cli7{
        background-image: url('/class/7.jpg');
    }
    .cli8{
        background-image: url('/class/8.jpg');
    }
    .cli9{
        background-image: url('/class/9.jpg');
    }

    .box:hover{
        backdrop-filter: brightness(0.5);
        transition: 0.5s ease-in-out;
    }
</style>

















</div>




<style>
    .class-card {
        background-color: #e5f1e5;
        color: #025d00;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .class-card h1{
        margin: 0;
        padding: 0;
    }
</style>

<script>
    document.getElementById('math-nav').classList.add('nav-active');
</script>



@endsection