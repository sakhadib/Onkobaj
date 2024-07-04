@extends('layouts.main')

@section('title', 'Home')

@section('main')

<div class="hom-1">
    <div class="cover df aic">
        <div class="container">
            <div class="row">
                <div class="col-12 df dfc aic">
                    <img src="/rsx/logo.svg" alt="" style="width: 400px">
                    <h1 class="display-1 hind text-center onkobaj" style="font-weight: 800">
                        তুমি কি একজন অংকবাজ ?
                    </h1>
                    <p class="fs-1 text-center hind">
                        তাহলে দেরী কেন ? চল শুরু করা যাক অংকের লড়াই
                    </p>
                    <div class="text-center">
                        <a href="/signup" class="btn btn-outline-dark fs-2" style="font-family:'Hind Siliguri', sans-serif;"><i class="fa-brands fa-space-awesome"></i> রেজিস্ট্রেশন</a>
                        <a href="/login" class="btn btn-dark fs-2" style="font-family:'Hind Siliguri', sans-serif;"><i class="fa-solid fa-right-to-bracket"></i> লগইন</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<style>
    .hom-1 {
        background-image: url('/rsx/hom-1.svg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
    }

    .cover {
        background-color: rgba(255, 255, 255, 0.7);
        min-height: 100vh;
    }
</style>

<script>
    document.getElementById('home-nav').classList.add('nav-active');
</script>

@endsection