@extends('layouts.main')

@section('title', 'Leaderboard')

@section('main')

<div class="vh-10"></div>

<div class="leader-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center hind display-1">লিডারবোর্ড</h1>
                <p class="text-center hind" style="font-size: 1.5rem;">দেখে নাও সবার মাঝে তোমার অবস্থান। কতটা এগিয়ে আসতে পারলে ?</p> 
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
                            <td>{{$solver->solver->name}}</td>
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



@endsection