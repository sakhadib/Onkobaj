@extends('layouts.main')

@section('main')

<div class="vh-10"></div>
<div class="container-fluid py-4">
    <form action="/shuvrodaadminedit/{{$problem->slug}}" method="POST">
        @csrf
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-4">
                        <div class="form-floating">
                            <select name="level_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option selected>Open this select menu</option>
                              @foreach($levels as $level)
                              <option @if($level->id == $problem->level_id) selected @endif value="{{$level->id}}">Level - {{$level->id}}</option>
                              @endforeach
                            </select>
                            <label for="floatingSelect">Level</label>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-floating mb-3">
                            <input value="{{$problem->title}}" name="title" type="text" class="form-control" id="floatingInputtitle" placeholder="name@example.com">
                            <label for="floatingInput">title</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input value="{{$problem->slug}}" name="slug" type="text" class="form-control" id="floatingInputslug" placeholder="name@example.com">
                    <label for="floatingInput">slug</label>
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-floating mb-3">
                    <input value="{{$problem->for_class}}" name="for_class" type="text" class="form-control" id="floatingInputslug" placeholder="name@example.com">
                    <label for="floatingInput">For Class (1, 2)</label>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-7">
                <div class="mb-3">
                    <label for="htmlTextarea" class="form-label">imports</label>
                    <textarea name="imports" class="form-control code-input" id="htmlTextarea" rows="5" placeholder="none likhte hobe kichu na thakle">
                        {{$problem->imports}}
                    </textarea>
                </div>
            </div>
            <div class="col-5">
                <div class="mb-3">
                    <label for="htmlTextarea" class="form-label">help Text (MD support)</label>
                    <textarea name="description" class="form-control code-input" id="htmlTextarea" rows="5" placeholder="none likhte hobe kichu na thakle">
                        {{$problem->description}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="htmlTextarea" class="form-label">অল প্রবলেম এর ডেস্ক্রিপশন</label>
                    <textarea name="body" class="form-control code-input" id="htmlTextarea" rows="20" placeholder="none likhte hobe kichu na thakle">
                        {!! $problem->body !!}
                    </textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="cssTextarea" class="form-label">CSS</label>
                    <textarea name="css" class="form-control code-input" id="cssTextarea" rows="20" placeholder="none likhte hobe kichu na thakle">
                        {!! $problem->css !!}
                    </textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="jsTextarea" class="form-label">JS</label>
                    <textarea name="js" class="form-control code-input" id="jsTextarea" rows="20" placeholder="none likhte hobe kichu na thakle">
                        {!! $problem->js !!}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="mt-3 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>



<style>
    .code-input {
    font-family: monospace;
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    padding: 10px;
}

body {
    background-color: #f2f2f2;
}
</style>

@endsection