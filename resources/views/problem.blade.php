@extends('layouts.main')

@section('title', '{{$problem->title}}')

@section('main')

    {{$problem->imports}}
    
    {{$problem->body}}

    <style>
        {{$problem->css}}
    </style>

    <script>
        {{$problem->js}}
    </script>


@endsection