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
                দ্রুততার সাথে অঙ্ক গুলো ঝালাই করতে এগিয়ে এসো। তোমার জন্য অপেক্ষা করছে ওযুত ওযুত নিযুত নিযুত অঙ্ক। কোন ধরনের অঙ্ক করতে চাও 
                তা নির্বাচন করো এবং চালিয়ে যাও দুর্বার গতিতে। 
            </p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-md-2 col-4 df jcfs aic">
            <div class="class-card">
                <h1 class="fs-3 hind">
                    প্রথম শ্রেণি
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($class_1_problems as $problem)
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title hind">{{$problem->title}}</h4>
                  <p class="card-text hind">এটি Level {{$problem->level_id}} এর একটি সেট। এখানে ভুল উত্তরের জন্য কোন পয়েন্ট কাটা যাবে না। ইচ্ছে মত অনুশীলন কর</p>
                  <a href="/problem/{{$problem->slug}}" class="btn btn-success" style='font-family: "Hind Siliguri", sans-serif;'>শুরু করা যাক </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <hr>
    <div class="row mt-5 mb-5">
        <div class="col-md-2 col-4 df jcfs aic">
            <div class="class-card">
                <h1 class="fs-3 hind">
                    দ্বিতীয় শ্রেণি
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($class_2_problems as $problem)
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title hind">{{$problem->title}}</h4>
                  <p class="card-text hind">এটি Level {{$problem->level_id}} এর একটি সেট। এখানে ভুল উত্তরের জন্য কোন পয়েন্ট কাটা যাবে না। ইচ্ছে মত অনুশীলন কর</p>
                  <a href="/problem/{{$problem->slug}}" class="btn btn-success" style='font-family: "Hind Siliguri", sans-serif;'>শুরু করা যাক </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
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



@endsection