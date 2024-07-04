

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
        { min: 0,      max: 600,    title: "Baby Shark" },
        { min: 601,    max: 1150,   title: "Dude" },
        { min: 1150,   max: 1720,   title: "Lieutenant" },
        { min: 1721,   max: 2410,   title: "Wizerd" },
        { min: 2411,   max: 3340,   title: "Auror" },
        { min: 3341,   max: 4190,   title: "Lord" },
        { min: 4191,   max: 5200,   title: "Dark Lord" },
        { min: 5201,   max: 6000,   title: "Undefeatable" },
        { min: 6001,   max: 7000,   title: "Googol" },
        { min: 7001,   max: 8040,   title: "Plex" },
        { min: 8041,   max: 9156,   title: "Wanted" },
        { min: 9157,   max: 9999,   title: "Legendary" },
        { min: 10000,  max: 11420,  title: "Titan" },
        { min: 11421,  max: 12132,  title: "Immortal" },
        { min: 12133,  max: 13155,  title: "Invincible" },
        { min: 13156,  max: 14000,  title: "Colossus" },
        { min: 14001,  max: 15050,  title: "Supreme" },
        { min: 15051,  max: 16000,  title: "Overlord" },
        { min: 16001,  max: 17400,  title: "Behemoth" },
        { min: 17401,  max: 18800,  title: "Juggermoth" },
        { min: 18801,  max: 19200,  title: "Leviathan" },
        { min: 19201,  max: 20600,  title: "Conqueror" },
        { min: 21601,  max: 23000,  title: "Dominator" },
        { min: 23001,  max: 24400,  title: "Master" },
        { min: 24401,  max: 25800,  title: "Grand Master" },
        { min: 25801,  max: 26200,  title: "Archmage" },
        { min: 26201,  max: 27600,  title: "Warlord" },
        { min: 27601,  max: 28300,  title: "Emperor" },
        { min: 28301,  max: 29400,  title: "Deity" },
        { min: 29401,  max: 30800,  title: "Ascendant" },
        { min: 30801,  max: 32200,  title: "Paragon" },
        { min: 32201,  max: 33600,  title: "Sage" },
        { min: 33601,  max: 35000,  title: "Oracle" },
        { min: 35001,  max: 38000,  title: "Exalted" },
        { min: 38001,  max: 40800,  title: "Eternal" },
        { min: 40801,  max: 45200,  title: "Mystic" },
        { min: 45201,  max: 50600,  title: "Caliph" },
        { min: 50601,  max: 70000,  title: "Polymath" }
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
the_title.innerText = getTitle(parseInt(pointValue));

let p = pointValue;
let title = document.getElementById('title'); // Assuming 'title' is the id of the element

if (p < 1500) {
    title.classList.add('bg-secondary');
} else if (p < 6000) {
    title.classList.add('bg-info text-dark');
} else if (p < 14000) {
    title.classList.add('bg-success');
} else if (p < 25000) {
    title.classList.add('bg-primary');
} else if (p < 40000) {
    title.classList.add('bg-warning text-dark');
} else if (p < 60000){
    title.classList.add('bg-danger');
}else{
    title.classList.add('bg-dark');
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






function updateBadgeBody(point){
    const badge_table = document.getElementById('badge-body');

    let badgeHTML = '';

    if(point > 0){
        badgeHTML += `
        <tr>
            <td class="text-center"><span class="color-box bg-secondary"></span></td>
            <td >Rising Gray</td>
        </tr>
        `;
    }
    if(point > 1500){
        badgeHTML += `
        <tr>
            <td class="text-center"><span class="color-box bg-info"></span></td>
            <td >Master Sky</td>
        </tr>
        `;
    }
    if(point > 6000){
        badgeHTML += `
        <tr>
            <td class="text-center"><span class="color-box bg-success"></span></td>
            <td >NatureMaster Green</td>
        </tr>
        `;
    }
    if(point > 14000){
        badgeHTML += `
        <tr>
            <td class="text-center"><span class="color-box bg-primary"></span></td>
            <td >SpaceMaster Blue</td>
        </tr>
        `;
    }
    if(point > 25000){
        badgeHTML += `
        <tr>
            <td class="text-center"><span class="color-box bg-warning"></span></td>
            <td >ThunderMuster Yellow</td>
        </tr>
        `;
    }
    if(point > 40000){
        badgeHTML += `
        <tr>
            <td class="text-center "><span class="color-box bg-danger"></span></td>
            <td >SolarMaster Red</td>
        </tr>
        `;
    }
    if(point > 60000){
        badgeHTML += `
        <tr>
            <td class="text-center"><span class="color-box bg-dark"></span></td>
            <td >The Supreme Master Black</td>
        </tr>
        `;
    }


    badge_table.innerHTML = badgeHTML;
}


updateBadgeBody(pointValue);




function getColor(point){
    let color = '';
    if(point < 1500){
        color = 'bg-secondary';
    }else if(point < 6000){
        color = 'bg-info text-dark';
    }else if(point < 14000){
        color = 'bg-success';
    }else if(point < 25000){
        color = 'bg-primary';
    }else if(point < 40000){
        color = 'bg-warning text-dark';
    }else if(point < 60000){
        color = 'bg-danger';
    }else{
        color = 'bg-dark';
    }

    return color;
}




function getbadges(point){
    const titles = [
        { min: 0,     title: "Baby Shark" },
        { min: 601,   title: "Dude" },
        { min: 1150,  title: "Lieutenant" },
        { min: 1721,  title: "Wizerd" },
        { min: 2411,  title: "Auror" },
        { min: 3341,  title: "Lord" },
        { min: 4191,  title: "Dark Lord" },
        { min: 5201,  title: "Undefeatable" },
        { min: 6001,  title: "Googol" },
        { min: 7001,  title: "Plex" },
        { min: 8041,  title: "Wanted" },
        { min: 9157,  title: "Legendary" },
        { min: 10000, title: "Titan" },
        { min: 11421, title: "Immortal" },
        { min: 12133, title: "Invincible" },
        { min: 13156, title: "Colossus" },
        { min: 14001, title: "Supreme" },
        { min: 15051, title: "Overlord" },
        { min: 16001, title: "Behemoth" },
        { min: 17401, title: "Juggermoth" },
        { min: 18801, title: "Leviathan" },
        { min: 19201, title: "Conqueror" },
        { min: 21601, title: "Dominator" },
        { min: 23001, title: "Master" },
        { min: 24401, title: "Grand Master" },
        { min: 25801, title: "Archmage" },
        { min: 26201, title: "Warlord" },
        { min: 27601, title: "Emperor" },
        { min: 28301, title: "Deity" },
        { min: 29401, title: "Ascendant" },
        { min: 30801, title: "Paragon" },
        { min: 32201, title: "Sage" },
        { min: 33601, title: "Oracle" },
        { min: 35001, title: "Exalted" },
        { min: 38001, title: "Eternal" },
        { min: 40801, title: "Mystic" },
        { min: 45201, title: "Caliph" },
        { min: 50601, title: "Polymath" },
        { min: 70001,  title: "SuperGuru"}
    ];

    let badges = [];
    let badge_min = [];

    for (let i = 0; i < titles.length; i++) {
        if (point >= titles[i].min) {
            badges.push(titles[i].title);
            badge_min.push(titles[i].min + 5);
        }
    }

    const title_holder = document.getElementById('title-holder');
    
    let badgeHTML = '';


    for(let i = 0; i < badges.length; i++){
        badgeHTML += `
        <div class="col-auto mt-4">
            <h1 class="fs-2"><span class="badge ${getColor(badge_min[i])}" style="font-weight:400; padding:13px; padding-top:10px">${badges[i]}</span></h1>
        </div>
        `;
    }

    title_holder.innerHTML = badgeHTML;
}


getbadges(pointValue);