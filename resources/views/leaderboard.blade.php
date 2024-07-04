@extends('layouts.main')

@section('title', 'Leaderboard')

@section('main')

<div class="vh-10"></div>

<div class="leader-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="hind display-3">লিডারবোর্ড</h1>
                <p class="text-secondary hind" style="font-size: 1.1rem;">দেখে নাও সবার মাঝে তোমার অবস্থান। কতটা এগিয়ে আসতে পারলে ? 
                    সার্চবার এ তুমি তোমার জেলা, উপজেলা স্কুলের নাম, অথবা সরাসরি কারো নাম টাইপ করেও সার্চ করতে পার। টেবিলের উপরের হেডিং গুলোতে ক্লিক করে
                    A - Z অথবা Z - A অনুযায়ী সাজাতে পার। তাছাড়া পয়েন্ট অনুযায়ী ও সাজাতে পার।
                </p> 
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table data-order='[[5, "desc"]]' data-page-length='25' id="stable" class="table table-hover table-stripped">
                    <thead>
                        <tr>
                            <th class="hind">অবস্থান</th>
                            <th class="hind">নাম</th>
                            <th class="hind">বিদ্যালয়</th>
                            <th class="hind">সঠিক</th>
                            <th class="hind">ভুল</th>
                            <th class="hind">পয়েন্ট</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($solvers as $key=>$solver)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><a href="/profile/{{$solver->solver->id}}" class="link-l">{{$solver->solver->name}}</a></td>
                            <td>{{$solver->solver->school}}, {{$solver->district}}</td>
                            <td>{{$solver->correct}}</td>
                            <td>{{$solver->wrong}}</td>
                            <td>{{$solver->solver->points}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<style>
    .leader-bg{
        min-height: 70vh;
    }
</style>


<script>
    document.getElementById('lb-nav').classList.add('nav-active');
</script>


@endsection