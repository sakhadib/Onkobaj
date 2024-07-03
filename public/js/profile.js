document.getElementById('profile-nav').classList.add('nav-active');

const point = document.getElementById('point');
let pointValue = parseInt(point.innerText);
let modifiedPoint = 0;
let pointString = '';

if (pointValue >= 1000 && pointValue < 1000000) {
    if(modifiedPoint % 1000 == 0){
        modifiedPoint = (pointValue / 1000);
    }
    else{
        modifiedPoint = (pointValue / 1000).toFixed(1);
    }
    pointString = modifiedPoint.toString() + 'K';
} else if (pointValue >= 1000000) {
    modifiedPoint = (pointValue / 1000000).toFixed(1);
    pointString = modifiedPoint.toString() + 'M';
} else {
    pointString = pointValue.toString();
}

point.innerText = pointString;


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



function convertToBanglaNumber(number) {
    const banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return number.toString().split('').map(digit => banglaDigits[parseInt(digit)]).join('');
}

const total = document.getElementById('tt');
const correct = document.getElementById('cr');
const wrong = document.getElementById('wr');

let totalf = parseInt(total.innerText);
let correctf = parseInt(correct.innerText);
let wrongf = parseInt(wrong.innerText);

total.innerText = convertToBanglaNumber(parseInt(total.innerText));
correct.innerText = convertToBanglaNumber(parseInt(correct.innerText));
wrong.innerText = convertToBanglaNumber(parseInt(wrong.innerText));

const totalPercentage = document.getElementById('ttper');
totalPercentage.innerText = convertToBanglaNumber(((correctf / totalf) * 100).toFixed(0)) + '%';



let the_title = document.getElementById('title');
the_title.innerText = getTitle(parseInt(correctf));

let p = correctf;
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



function formatDuration(minutes) {
    const MINUTES_IN_YEAR = 525600;
    const MINUTES_IN_MONTH = 43800;
    const MINUTES_IN_DAY = 1440;
    const MINUTES_IN_HOUR = 60;

    let years = Math.floor(minutes / MINUTES_IN_YEAR);
    minutes %= MINUTES_IN_YEAR;

    let months = Math.floor(minutes / MINUTES_IN_MONTH);
    minutes %= MINUTES_IN_MONTH;

    let days = Math.floor(minutes / MINUTES_IN_DAY);
    minutes %= MINUTES_IN_DAY;

    let hours = Math.floor(minutes / MINUTES_IN_HOUR);
    let remainingMinutes = minutes % MINUTES_IN_HOUR;

    let duration = '';

    if (years > 0) {
        duration += `${convertToBanglaNumber(years)} বছর `;
    }
    if (months > 0) {
        duration += `${convertToBanglaNumber(months)} মাস `;
    }
    if (days > 0) {
        duration += `${convertToBanglaNumber(days)} দিন `;
    }
    if (hours > 0) {
        duration += `${convertToBanglaNumber(hours)} ঘণ্টা `;
    }
    if (remainingMinutes > 0 || duration === '') {
        duration += `${convertToBanglaNumber(remainingMinutes)} মিনিট`;
    }

    return duration.trim();
}


function updateTimeSpenders() {
    const timeSpenderElements = document.querySelectorAll('.time_spender');

    timeSpenderElements.forEach(element => {
        const minutes = parseInt(element.innerText, 10);
        if (!isNaN(minutes)) {
            element.innerText = formatDuration(minutes);
        }
    });
}

const minuter = document.getElementById('minuter');
const totalMinutes = parseInt(minuter.innerText);

minuter.innerText = formatDuration(totalMinutes);


updateTimeSpenders();