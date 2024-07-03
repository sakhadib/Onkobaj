<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="/rsx/logo.svg">

    <title>@yield('title') - Onkobaj</title>

    {{-- Own CSS --}}
    <link rel="stylesheet" href="/css/util.css">

    {{-- own js --}}
    <script defer src="/js/pt.js"></script>
    <script defer src="/js/dt.js"></script>

    {{-- Data Table --}}
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="{{url('js/dt.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">


    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#" class="df dfc jcc" style='font-family: "Hind Siliguri", sans-serif; font-weight: 500; font-size: 1.5rem; font-style: normal;'>
            <img src="/rsx/logo.svg" alt="" width="45px">
            অংকবাজ 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style='font-size: 1.2rem; font-family: "Hind Siliguri", sans-serif; font-weight: 600'>
              <li class="nav-item" id="home-nav">
                <a class="nav-link" href="/"><i class="fa-solid fa-house"></i> হোম</a>
              </li>
              <li class="nav-item" id="home-nav">
                <a class="nav-link" href="/leaderboard"><i class="fa-solid fa-ranking-star"></i> লিডারবোর্ড</a>
              </li>
              @if(session('solver')==null)
              <li class="nav-item" id="reg-nav">
                <a class="nav-link" href="/signup"><i class="fa-brands fa-space-awesome"></i> রেজিস্টার</a>
              </li>
              <li class="nav-item" id="login-nav">
                <a class="nav-link" href="/login"><i class="fa-solid fa-right-to-bracket"></i> লগইন</a>
              </li>
              @endif
              @if(session('solver') != null)
              <li class="nav-item" id="math-nav">
                <a class="nav-link" href="/problemset"><i class="fa-solid fa-shapes"></i> অঙ্কগুলো</a>
              </li>
              <li class="nav-item" id="profile-nav">
                <a class="nav-link" href="/profile/{{session('solver')->id}}"><i class="fa-solid fa-user"></i> {{session('solver')->name}}</a>
              </li>
              <li class="nav-item" id="math-nav">
                <a class="nav-link" href="/logout"><i class="fa-solid fa-right-from-bracket"></i> লগআউট</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>



      <style>

    </style>





    
