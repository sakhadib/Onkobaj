@extends('layouts.main')

@section('title', 'Profile')

@section('main')

<div class="vh-10"></div>

<div class="container">
    <div class="row  vh-30 df aic">
        <div class="col-md-4 offset-md-1">
            <div class="row">
                <div class="col-md-12 df dfc jcc aic">
                    <div class="pbox">
                        <h1 id="pname">As</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row mt-5 mt-md-0">
                <div class="col-md-2 col-4">
                    <h1 class="fs-5 hind">নাম: </h1>
                </div>
                <div class="col-8">
                    <h1 class="fs-5 hind"><span class="badge" id="title"></span> <span id="solver_name">{{$solver->name}}</span> </h1>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-2 col-4">
                    <h1 class="fs-5 hind">স্কুল : </h1>
                </div>
                <div class="col-8">
                    <h1 class="fs-5 hind">{{$solver->school}}</h1>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-2 col-4">
                    <h1 class="fs-5 hind">উপজেলা : </h1>
                </div>
                <div class="col-8">
                    <h1 class="fs-5 hind">{{$upozilla->name}}</h1>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-2 col-4">
                    <h1 class="fs-5 hind">জেলা : </h1>
                </div>
                <div class="col-8">
                    <h1 class="fs-5 hind">{{$district->name}}</h1>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-2 col-4">
                    <h1 class="fs-5 hind">পয়েন্ট : </h1>
                </div>
                <div class="col-8">
                    <h1 class="fs-5 hind" id="point">{{$total_point}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .pbox {
        width: 200px;
        height: 200px;
        background-color: #4d6b2f;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    #pname{
        font-size: 3rem;
        color: white;
    }
</style>





<script>
    document.getElementById('profile-nav').classList.add('nav-active');
</script>

<script>
    const point = document.getElementById('point');
    let pointValue = parseInt(point.innerText);
    let modifiedPoint = 0;
    let pointString = '';
    
    if (pointValue >= 1000 && pointValue < 1000000) {
        modifiedPoint = (pointValue / 1000).toFixed(2);
        pointString = modifiedPoint.toString() + 'K';
    } else if (pointValue >= 1000000) {
        modifiedPoint = (pointValue / 1000000).toFixed(2);
        pointString = modifiedPoint.toString() + 'M';
    } else {
        pointString = pointValue.toString();
    }
    
    point.innerText = pointString;
</script>



<script>
function getTitle(pointValue) {
    const titles = [
        { min: 0, max: 200, title: "Baby Shark" },
        { min: 201, max: 450, title: "Dude" },
        { min: 451, max: 720, title: "Lieutenant" },
        { min: 721, max: 1010, title: "Wizerd" },
        { min: 1011, max: 1340, title: "Auror" },
        { min: 1341, max: 1690, title: "Lord" },
        { min: 1691, max: 2020, title: "Dark Lord" },
        { min: 2021, max: 2423, title: "Undefeatable" },
        { min: 2424, max: 2675, title: "Googol" },
        { min: 2676, max: 2900, title: "Plex" },
        { min: 2901, max: 3200, title: "Wanted" },
        { min: 3201, max: 3600, title: "Legendary" },
        { min: 3600, max: 4000, title: "Titan" },
        { min: 4001, max: 4400, title: "Immortal" },
        { min: 4401, max: 4800, title: "Invincible" },
        { min: 4801, max: 5200, title: "Colossus" },
        { min: 5201, max: 5600, title: "Supreme" },
        { min: 5601, max: 6000, title: "Overlord" },
        { min: 6001, max: 6400, title: "Behemoth" },
        { min: 6401, max: 6800, title: "Juggermoth" },
        { min: 6801, max: 7200, title: "Leviathan" },
        { min: 7201, max: 7600, title: "Conqueror" },
        { min: 7601, max: 8000, title: "Dominator" },
        { min: 8001, max: 8400, title: "Master" },
        { min: 8401, max: 8800, title: "Grand Master" },
        { min: 8801, max: 9200, title: "Archmage" },
        { min: 9201, max: 9600, title: "Warlord" },
        { min: 9601, max: 10000, title: "Emperor" },
        { min: 10001, max: 10400, title: "Deity" },
        { min: 10401, max: 10800, title: "Ascendant" },
        { min: 10801, max: 11200, title: "Paragon" },
        { min: 11201, max: 11600, title: "Sage" },
        { min: 11601, max: 12000, title: "Oracle" },
        { min: 12001, max: 12400, title: "Exalted" },
        { min: 12401, max: 12800, title: "Eternal" },
        { min: 12801, max: 13200, title: "Mystic" },
        { min: 13201, max: 13600, title: "Caliph" },
        { min: 13601, max: 14000, title: "Polymath" }
    ];

    for (let i = 0; i < titles.length; i++) {
        if (pointValue >= titles[i].min && pointValue <= titles[i].max) {
            return titles[i].title;
        }
    }
    return "SuperGuru";
}


let the_title = document.getElementById('title');
the_title.innerText = getTitle(parseInt(pointValue));

let p = pointValue;
let title = document.getElementById('title'); // Assuming 'title' is the id of the element

if (p < 500) {
    title.classList.add('bg-secondary');
} else if (p < 1000) {
    title.classList.add('bg-info');
} else if (p < 2000) {
    title.classList.add('bg-success');
} else if (p < 3000) {
    title.classList.add('bg-primary');
} else if (p < 4000) {
    title.classList.add('bg-warning');
} else {
    title.classList.add('bg-danger');
}
</script>


<script>
    const solver_name = document.getElementById('solver_name');
    const nameArray = solver_name.innerText.split(' ');
    const first_letter = nameArray[0].charAt(0).toUpperCase();
    const second_letter = nameArray.length > 1 ? nameArray[1].charAt(0).toLowerCase() : '';
    const img_text = first_letter + second_letter;
</script>


@endsection