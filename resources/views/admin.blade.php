@extends('layouts.main')

@section('main')

<div class="vh-100 df aic">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="/iamshuvro" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="hehe" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Hehe</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="HEHE" type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">hehe</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection