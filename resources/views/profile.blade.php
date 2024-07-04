@extends('layouts.main')

@section('title', 'Profile')

@section('main')

<div class="vh-10"></div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-card">
                <div class="row">
                    <div class="col-6 df jcfs aic">
                        <h1 class="fs-3 badge" id="title" style="font-weight:400; padding:13px; padding-top:10px"></h1>
                    </div>
                    <div class="col-6 df jcfe aic">
                        <h1 class="fs-1 text-secondary" id="point">{{$total_point}}</h1>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <h1 class="fs-1">{{$solver->name}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="fs-4">{{$solver->school}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h1 class="fs-5">{{$upozilla->name}}, {{$district->name}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-md-0 mt-4">
            <div class="details-card">
                <div class="row">
                    <div class="col-4">
                        <h1 class="display-4 text-center noto" id="tt">{{$correct_count + $wrong_count}}</h1>
                        <h1 class="fs-4 text-center text-secondary hind">মোট অঙ্ক</h1>
                    </div>
                    <div class="col-4">
                        <h1 class="display-4 text-center noto" id="cr">{{$correct_count}}</h1>
                        <h1 class="fs-4 text-center text-secondary hind">সঠিক</h1>
                    </div>
                    <div class="col-4">
                        <h1 class="display-4 text-center noto" id="wr">{{$wrong_count}}</h1>
                        <h1 class="fs-4 text-center text-secondary hind">ভুল</h1>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <h1 class="display-4 text-center noto" id="ttper"></h1>
                        <h1 class="fs-4 text-center text-secondary hind">পারদর্শিতা</h1>
                    </div>
                    <div class="col-8 df dfc aic jcfe">
                        <h1 class="display-6 text-center noto" id="minuter">{{$total_minutes}}</h1>
                        <h1 class="fs-4 text-center text-secondary hind">মোট অতিবাহিত সময়</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="color-card">
                <h1 class="fs-2 l hind">
                    অর্জিত ব্যাজগুলো
                </h1>
                <hr>
                <table class="table align-middle table-responsive table-striped" style="font-size:1.2rem">
                    <thead>
                        <tr>
                            <th class="hind">ব্যাজ</th>
                            <th class="hind">ব্যাজ টাইটেল</th>
                        </tr>
                    </thead>
                    <tbody id="badge-body" class="table-group-divider">

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-8 mt-3">
            <div class="title-card">
                <h1 class="fs-2 l hind">
                    অর্জিত টাইটেলগুলো
                </h1>
                <hr>
                <div class="row" id="title-holder">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="table-card">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-1 hind text-center">
                            ইতিহাস পাতিহাঁস
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table data-order='[[0, "desc"]]' data-page-length='25' id="stable" class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="hind">অঙ্ক</th>
                                        <th class="hind">সঠিক</th>
                                        <th class="hind">ভুল</th>
                                        <th class="hind">সময়</th>
                                        <th class="hind">তারিখ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($submissions as $sub)
                                        <tr>
                                            <td class="noto"><a href="/problem/{{$sub->problem->slug}}" class="link-l">{{$sub->problem->title}}</a></td>
                                            <td>{{$sub->submission->correct_count}}</td>
                                            <td>{{$sub->submission->incorrect_count}}</td>
                                            <td class="time_spender noto">{{$sub->minutes_spent}}</td>
                                            <td>{{$sub->submission->created_at->addHours(6)->format('j F Y \a\t g:i A')}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>



<link rel="stylesheet" href="/css/profile.css">

<script src="/js/profile.js"></script> 


@if(session('solver') != null)
<script>
    document.getElementById('profile-nav').classList.add('nav-active');
</script>
@endif

@endsection