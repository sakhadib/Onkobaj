@extends('layouts.main')

@section('title', 'Login')

@section('main')

<div class="vh-90 df aic">
    <div class="container">
        <div class="row">
            <div class="col-md-6 df dfc jcc aic mb-5">
                <img src="/rsx/logo.svg" style="width: 30%" alt="">
                <h1 class="display-1" style="font-family: 'Hind Siliguri', sans-serif;">
                    অংকবাজ
                </h1>
                <p class="lead hind">
                    অঙ্ক গুলো অপেক্ষায় আছে তোমার
                </p>
            </div>
            <div class="col-md-4 offset-md-1 df dfc jcc">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert" style="font-family: 'Hind Siliguri', sans-serif;">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success" role="alert" style="font-family: 'Hind Siliguri', sans-serif;">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <h1 class="fs-5 hind mb-3">নিচের তথ্যগুলো ইংরেজী (english) এ লিখি</h1>
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off" required>
                        <label for="floatingInput" class="hind">আপনার ইমেইল</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off" required>
                        <label for="floatingPassword" class="hind">পাসওয়ার্ড</label>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-success btn-lg w-100" style="font-family: 'Hind Siliguri', sans-serif;">লগইন</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







<script>
    document.getElementById('login-nav').classList.add('nav-active');
</script>
@endsection