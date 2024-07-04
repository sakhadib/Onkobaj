@extends('layouts.main')

@section('title', 'Registration')


@section('main')

<div class="vh-90 df aic">
    <div class="container">
        <div class="row">
            <div class="col-md-6 df dfc jcc aic">
                <img src="/rsx/logo.svg" style="width: 30%" alt="">
                <h1 class="display-1" style="font-family: 'Hind Siliguri', sans-serif;">
                    অংকবাজ
                </h1>
                <p class="lead hind">
                    চল ঘুরি অঙ্করাজ্যের কোনায় কোনায়
                </p>
                
            </div>
            <div class="col-md-4 offset-md-1 df dfc jcc">
                <form action="/signup" method="post">
                    @csrf
                    <h1 class="fs-5 hind mb-3 mt-5">নিচের তথ্যগুলো ইংরেজী (english) এ লিখি</h1>
                    <p class="noto text-secondary">
                        সাইনআপ করার মাধ্যমে আপনি এই ওয়েবসাইটের <a href="/rules" class="link-l">আইনকানুন</a> মেনে চলার জন্য অঙ্গিকারাবদ্ধ হবেন
                    </p>
                    <div id="part-1">
                        
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                            <label for="floatingInput" class="hind">আপনার নাম</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input name="school" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                            <label for="floatingInput" class="hind">স্কুল এর নাম </label>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <select name="district" class="form-select hind" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected class="hind">বাছাই করুন</option>
                                    @foreach ($districts as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    
                                    </select>
                                    <label for="floatingSelect" class="hind">আপনার জেলা</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <input name="upozilla" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                                    <label for="floatingInput" class="hind">উপজেলা</label>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>


                    <div id="part-2">
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                            <label for="floatingInput" class="hind">আপনার ইমেইল</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
                            <label for="floatingPassword" class="hind">পাসওয়ার্ড</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="confirmPassword" type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
                            <label for="floatingPassword" class="hind">পাসওয়ার্ডটি আবার লিখুন </label>
                        </div>
                    </div>



                    
                    

                    <div class="row">
                        <div class="col-12 df jcc">
                            <div class="btn-group">
                                <button class="btn btn-outline-success btn-lg" id="toogler" style="font-family: 'Hind Siliguri', sans-serif">এগিয়ে যান</button>
                                <button class="btn btn-success btn-lg" id="submitter" type="submit" style="font-family: 'Hind Siliguri', sans-serif">সাবমিট</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }

    @keyframes fadeOut {
        from { opacity: 1; transform: scale(1); }
        to { opacity: 0; transform: scale(0.9); }
    }

    .fade-in {
        animation: fadeIn 0.5s forwards;
    }

    .fade-out {
        animation: fadeOut 0.5s forwards;
    }

    .hidden {
        display: none;
    }
</style>


<script>
    document.getElementById('reg-nav').classList.add('nav-active');
</script>




<script>
    const part1 = document.getElementById('part-1');
    const part2 = document.getElementById('part-2');
    const toogler = document.getElementById('toogler');
    const submitter = document.getElementById('submitter');

    part2.classList.add('hidden');
    submitter.classList.add('hidden');
    let page = 1;

    toogler.addEventListener('click', function(event) {
        event.preventDefault();

        if (page == 1) {
            part1.classList.add('fade-out');
            part1.classList.remove('fade-in');
            setTimeout(() => {
                part1.classList.add('hidden');
                part1.classList.remove('fade-out');
                part2.classList.remove('hidden');
                part2.classList.add('fade-in');
                submitter.classList.remove('hidden');
                submitter.classList.add('fade-in');
            }, 500); // Match the duration of the animation

            toogler.innerHTML = 'আগের পাতা';
            page = 2;
        } else {
            part2.classList.add('fade-out');
            part2.classList.remove('fade-in');
            setTimeout(() => {
                part2.classList.add('hidden');
                part2.classList.remove('fade-out');
                submitter.classList.add('hidden');
                submitter.classList.remove('fade-in');
                part1.classList.remove('hidden');
                part1.classList.add('fade-in');
            }, 500); // Match the duration of the animation

            toogler.innerHTML = 'এগিয়ে যান';
            page = 1;
        }
    });


    submitter.addEventListener('click', function(event) {
        event.preventDefault();
        document.querySelector('form').submit();
    });
</script>


@endsection