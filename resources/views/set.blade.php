@extends('layouts.main')

@section('title', 'Problems')

@section('main')

<div class="set-main">
    <div class="vh-10"></div>
    <div class="container">
        <div class="row">
            @foreach($problems as $problem)
            <div class="col-md-4">
                <div class="card bs">
                    <div class="card-body">
                        <h1 class="fs-3 text-center mb-4"><span class="badge bg-white text-dark level" style="font-weight: 500;">level {{$problem->level_id}}</span></h1>

                        <h1 class="display-5 text-center hind mb-4">{{$problem->title}}</h1>

                        <p class="lead text-secondary hind" style="text-align: justify;">
                            {{$problem->body}}
                        </p>
                        <a href="/problem/{{$problem->slug}}" class="btn btn-lg btn-dark w-100" style="font-family: 'Hind Siliguri', sans-serif">চল শুরু করি</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .set-main{
        min-height: 60vh;
    }

    .level{
        border: 1px solid rgb(199, 199, 199);
        box-shadow: 0 0 30px rgba(190, 195, 198, 0.713);
    }
</style>

@endsection