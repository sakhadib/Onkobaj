@extends('layouts.main')

@section('title', 'Admin')

@section('main')


<div class="vh-10"></div>


<div class="container">
    <div class="row">
        <div class="col-12">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/shuvrodaadmin" class="btn btn-lg btn-dark">Create</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        @foreach ($problems as $item)
            <div class="col-md-4 mt-4">
                <h1 class="fs-2 hind">{{$item->title}}</h1>
                <p class="lead">Level {{$item->level_id}} for class {{$item->for_class}}</p>
                <a href="/shuvrodaedit/{{$item->slug}}" class="btn btn-sm btn-outline-dark">Edit</a>
                <a href="/shuvrodadelete/{{$item->slug}}" class="btn btn-sm btn-outline-dark">Delete</a>
            </div>
        @endforeach
    </div>
</div>


@endsection