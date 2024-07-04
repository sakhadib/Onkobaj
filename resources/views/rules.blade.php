@extends('layouts.main')

@section('title', 'Rules')

@section('main')
<div class="vh-10"></div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-1 l hind text-center"><span class="display-3"><i class="fa-solid fa-scale-balanced"></i></span> আইন কানুন</h1>
            <hr>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ১.
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                অংকবাজ একটি অংক প্রতিযোগিতা প্লাটফর্ম। এখানে অংকবাজরা সমস্যা সমাধান করে পয়েন্ট করে। প্রতিটি সমস্যা একটি পয়েন্ট দেয়া থাকে। 
                সঠিক উত্তর দিলে পয়েন্ট পাওয়া যায়। ভুল উত্তর দিলে পয়েন্ট কেটে যায় না। তবে তুমি ভুল উত্তর দিয়েছ সেটা তোমার প্রোফাইলে যুক্ত হবে।
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ২.
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                প্রতিটি প্রশ্ন এর সেট একটি লেভেল এর সাথে যুক্ত রয়েছে। লেভেল অনুযায়ি যতগুলো সঠিক করবে তাকে ঐ লেভেল এর পয়েন্ট দিয়ে গুন করা হবে।
                গুন করলে যা পাওয়া যাবে তাই ঐ সমস্যা গুলো সমাধানের জন্য তোমার পয়েন্ট।
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 mt-3 df aic jcc">
            <h1 class="display-6 l noto">
                ক) 
            </h1>
        </div>
        <div class="col-md-10 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                সর্বনিম্ন লেভেল - ১ থেকে শুরু করে সর্বোচ্চ লেভেল - ১০ পর্যন্ত সমস্যা রয়েছে। লেভেল অনুযায়ি পয়েন্ট এর তালিকা গুলো এখানে দেওয়া হল,
            </p>
        </div>
        <div class="col-md-4 offset-md-4 mt-4">
            <table class="table table-hover table-bordered table-centered table-responsive">
                <thead class="">
                    <tr>
                        <th class="hind text-center" style="font-size: 1.7rem;">লেভেল</th>
                        <th class="hind text-center" style="font-size: 1.7rem;">পয়েন্ট</th>
                    </tr>
                </thead>
                <tbody  class="table-group-divider">
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">১</td>
                        <td class="noto text-center" style="font-size: 1.4rem">৫</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">২</td>
                        <td class="noto text-center" style="font-size: 1.4rem">৭</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">৩</td>
                        <td class="noto text-center" style="font-size: 1.4rem">৯</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">৪</td>
                        <td class="noto text-center" style="font-size: 1.4rem">১৩</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">৫</td>
                        <td class="noto text-center" style="font-size: 1.4rem">১৬</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">৬</td>
                        <td class="noto text-center" style="font-size: 1.4rem">১৮</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">৭</td>
                        <td class="noto text-center" style="font-size: 1.4rem">২১</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">৮</td>
                        <td class="noto text-center" style="font-size: 1.4rem">২৪</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">৯</td>
                        <td class="noto text-center" style="font-size: 1.4rem">৩০</td>
                    </tr>
                    <tr>
                        <td class="noto text-center" style="font-size: 1.4rem">১০</td>
                        <td class="noto text-center" style="font-size: 1.4rem">৫০</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 mt-3 df aic jcc">
            <h1 class="display-6 l noto">
                খ) 
            </h1>
        </div>
        <div class="col-md-10 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                যেকোন শ্রেণির প্রশ্নে যেকোন লেভেল থাকতে পারে এবং এ বিষয়ে অংকবাজ এর সিদ্ধান্তই চূড়ান্ত। তুমি যে শ্রেণিতেই পড়াশোনা করনা কেন,
                চাইলে তুমি সকল শ্রেণির প্রশ্ন সমাধান করতে পারবে।
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ৩. 
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                এই ওয়েব এপ্লিকেশন এর অনেক কিছুই ব্রাউজার ভিত্তিক। কাজেই তুমি যদি কোন সমস্যায় পড়ে থাকো তাহলে তুমি তোমার ব্রাউজার আপডেট করতে পারো।
                এবং তোমার ইন্টারনেট কানেকশন ঠিক রাখতে হবে।
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ৪. 
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
               ব্রাউজার এ জাভাস্ক্রিপ্ট enable না করা থাকলে তুমি সমস্যা সমাধান করতে পারবে না। তাই তোমার ব্রাউজার এ জাভাস্ক্রিপ্ট enable করে রাখতে হবে।
               কিভাবে enable করবে তা জানতে <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#jsenable">এখানে ক্লিক কর</button>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ৫. 
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
               কোন অংকে যদি তুমি ভুল পাও বা এমন হয় যে সঠিক উত্তর অপশন গুলোর মাঝে নেই। তবে ঐ প্রশ্নটির স্ক্রিনশট নিয়ে <mark>sakhawatadib@gmail.com</mark> এড্রেসে সেন্ড কর। 
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ৬. 
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                তোমার পারদর্শিতা নির্ণয় করার জন্য এই সূত্রটি ব্যবহার করা হয়,
                <br>
                <span class="text-danger noto">
                    পারদর্শিতা = সঠিক উত্তর/(সঠিক উত্তর + ভুল উত্তর) <i class="fa-solid fa-xmark"></i> ১০০
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ৭. 
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                তোমার পয়েন্ট এর উপর ভিত্তি করে তুমি অংকরাজ্যের কিছু টাইটেল পেতে পার। তুমি যদি বড় টাইটেল পেতে চাও তাহলে তোমার পয়েন্ট বাড়াতে হবে। 
                এছাড়াও নির্দিষ্ট পয়েন্ট রেঞ্জে টাইটেল যাই হোক না কেন তুমি পাবে ব্যাজ কালার।
                নিচে পয়েন্ট এর উপর ভিত্তি করে টাইটেল এবং ব্যাজ কালার এর তালিকা দেয়া হল,
            </p>
        </div>
        <div class="col-md-5 mt-3 offset-md-1" >
            <h1 class="fs-3 hind l">
                পয়েন্ট অনুযায়ি ব্যাজ কালার
            </h1>
            <table class="table table-hover table-striped table-bordered table-centered table-responsive">
                <thead>
                    <tr>
                        <th>Min</th>
                        <th>Max</th>
                        <th>Color</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>0</td>
                        <td>1500</td>
                        <td>Rising Gray</td>
                        <td class="text-center"><span class="color-box bg-secondary"></span></td>
                    </tr>
                    <tr>
                        <td>1501</td>
                        <td>6000</td>
                        <td>Master Sky</td>
                        <td class="text-center"><span class="color-box bg-info"></span></td>
                    </tr>
                    <tr>
                        <td>6001</td>
                        <td>14000</td>
                        <td>NatureMaster Green</td>
                        <td class="text-center"><span class="color-box bg-success"></span></td>
                    </tr>
                    <tr>
                        <td>14001</td>
                        <td>25000</td>
                        <td>SpaceMaster Blue</td>
                        <td class="text-center"><span class="color-box bg-primary"></span></td>
                    </tr>
                    <tr>
                        <td>25001</td>
                        <td>40000</td>
                        <td>ThunderMuster Yellow</td>
                        <td class="text-center"><span class="color-box bg-warning"></span></td>
                    </tr>
                    <tr>
                        <td>40001</td>
                        <td>60000</td>
                        <td>SolarMaster Red</td>
                        <td class="text-center"><span class="color-box bg-danger"></span></td>
                    </tr>
                    <tr>
                        <td>60001</td>
                        <td class="text-center"><i class="fa-solid fa-infinity"></i></td>
                        <td>The Supreme Master Black</td>
                        <td class="text-center"><span class="color-box bg-dark"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-5 mt-3">
            <h1 class="fs-3 hind l">
                পয়েন্ট অনুযায়ি টাইটেল
            </h1>
            <table class="table table-hover table-striped table-bordered table-centered table-responsive">
                <thead>
                    <tr>
                        <th>Minimum</th>
                        <th>Maximum</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>0</td>
                        <td>600</td>
                        <td>Baby Shark</td>
                    </tr>
                    <tr>
                        <td>601</td>
                        <td>1150</td>
                        <td>Dude</td>
                    </tr>
                    <tr>
                        <td>1151</td>
                        <td>1720</td>
                        <td>Lieutenant</td>
                    </tr>
                    <tr>
                        <td>1721</td>
                        <td>2410</td>
                        <td>Wizerd</td>
                    </tr>
                    <tr>
                        <td>2411</td>
                        <td>3340</td>
                        <td>Auror</td>
                    </tr>
                    <tr>
                        <td>3341</td>
                        <td>4190</td>
                        <td>Lord</td>
                    </tr>
                    <tr>
                        <td>4191</td>
                        <td>5200</td>
                        <td>Dark Lord</td>
                    </tr>
                    <tr>
                        <td>5201</td>
                        <td>6000</td>
                        <td>Undefeatable</td>
                    </tr>
                    <tr>
                        <td>6001</td>
                        <td>7000</td>
                        <td>Googol</td>
                    </tr>
                    <tr>
                        <td>7001</td>
                        <td>8040</td>
                        <td>Plex</td>
                    </tr>
                    <tr>
                        <td>8041</td>
                        <td>9156</td>
                        <td>Wanted</td>
                    </tr>
                    <tr>
                        <td>9157</td>
                        <td>9999</td>
                        <td>Legendary</td>
                    </tr>
                    <tr>
                        <td>10000</td>
                        <td>11420</td>
                        <td>Titan</td>
                    </tr>
                    <tr>
                        <td>11421</td>
                        <td>12132</td>
                        <td>Immortal</td>
                    </tr>
                    <tr>
                        <td>12133</td>
                        <td>13155</td>
                        <td>Invincible</td>
                    </tr>
                    <tr>
                        <td>13156</td>
                        <td>14000</td>
                        <td>Colossus</td>
                    </tr>
                    <tr>
                        <td>14001</td>
                        <td>15050</td>
                        <td>Supreme</td>
                    </tr>
                    <tr>
                        <td>15051</td>
                        <td>16000</td>
                        <td>Overlord</td>
                    </tr>
                    <tr>
                        <td>16001</td>
                        <td>17400</td>
                        <td>Behemoth</td>
                    </tr>
                    <tr>
                        <td>17401</td>
                        <td>18800</td>
                        <td>Juggermoth</td>
                    </tr>
                    <tr>
                        <td>18801</td>
                        <td>19200</td>
                        <td>Leviathan</td>
                    </tr>
                    <tr>
                        <td>19201</td>
                        <td>20600</td>
                        <td>Conqueror</td>
                    </tr>
                    <tr>
                        <td>21601</td>
                        <td>23000</td>
                        <td>Dominator</td>
                    </tr>
                    <tr>
                        <td>23001</td>
                        <td>24400</td>
                        <td>Master</td>
                    </tr>
                    <tr>
                        <td>24401</td>
                        <td>25800</td>
                        <td>Grand Master</td>
                    </tr>
                    <tr>
                        <td>25801</td>
                        <td>26200</td>
                        <td>Archmage</td>
                    </tr>
                    <tr>
                        <td>26201</td>
                        <td>27600</td>
                        <td>Warlord</td>
                    </tr>
                    <tr>
                        <td>27601</td>
                        <td>28300</td>
                        <td>Emperor</td>
                    </tr>
                    <tr>
                        <td>28301</td>
                        <td>29400</td>
                        <td>Deity</td>
                    </tr>
                    <tr>
                        <td>29401</td>
                        <td>30800</td>
                        <td>Ascendant</td>
                    </tr>
                    <tr>
                        <td>30801</td>
                        <td>32200</td>
                        <td>Paragon</td>
                    </tr>
                    <tr>
                        <td>32201</td>
                        <td>33600</td>
                        <td>Sage</td>
                    </tr>
                    <tr>
                        <td>33601</td>
                        <td>35000</td>
                        <td>Oracle</td>
                    </tr>
                    <tr>
                        <td>35001</td>
                        <td>38000</td>
                        <td>Exalted</td>
                    </tr>
                    <tr>
                        <td>38001</td>
                        <td>40800</td>
                        <td>Eternal</td>
                    </tr>
                    <tr>
                        <td>40801</td>
                        <td>45200</td>
                        <td>Mystic</td>
                    </tr>
                    <tr>
                        <td>45201</td>
                        <td>50600</td>
                        <td>Caliph</td>
                    </tr>
                    <tr>
                        <td>50601</td>
                        <td>70000</td>
                        <td>Polymath</td>
                    </tr>
                    <tr>
                        <td>70000</td>
                        <td>Infinity</td>
                        <td>SuperGuru</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ৮. 
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                যেকোন প্রকার অ্যাটাক / কোডের সাথে খেলা করা সম্পূর্ণ নিষিদ্ধ। যদি কেউ এই ধরনের কোন কাজ করে তাহলে তার অ্যাকাউন্ট স্থায়ীভাবে ব্যান করা হবে।
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 mt-3 df aic">
            <h1 class="display-3 l noto">
                ৯. 
            </h1>
        </div>
        <div class="col-md-11 mt-3 df aic">
            <p class="lead hind" style="font-size: 1.6rem; text-align: justify;">
                অংকবাজ সংক্রান্ত সকল বিষয়ে আদিব সাখাওয়াতের সিদ্ধান্তই চুড়ান্ত বলে গণ্য হবে। এক্ষেত্রে যেকোন সময় যেকোন নিয়ম যোগ, পরিবর্তন বা বাতিল করা হতে পারে। এর জন্য অংকবাজ
                এর সাথে সংস্লিষ্ট কেউ কোন প্রকার জবাবদিহি করতে বাধ্য না।
            </p>
        </div>
    </div>
</div>











<div class="modal fade" id="jsenable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-3 hind" id="exampleModalLabel">যেকোনো ব্রাউজারে জাভাস্ক্রিপ্ট সক্রিয় করার নিয়ম</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body noto">
            <div id="js-instructions-modal">
                <h3>পিসি:</h3>
                <ul>
                    <li class="mt-3"><strong>Google Chrome:</strong> মেনু বাটনে ক্লিক করুন (তিনটি ডট উপরে ডানদিকে) > <i>Settings</i> > <i>Privacy and security</i> > <i>Site settings</i> > <i>JavaScript</i> > <i>Allowed (recommended)</i> নির্বাচন করুন।</li>
                    <li class="mt-3"><strong>Mozilla Firefox:</strong> এড্রেস বারে টাইপ করুন <code>about:config</code> এবং সতর্কতা গ্রহণ করুন > সার্চ বারে টাইপ করুন <code>javascript.enabled</code> > সেটিংসটি দ্বিগুণ ক্লিক করে <i>true</i> করুন।</li>
                    <li class="mt-3"><strong>Microsoft Edge:</strong> মেনু বাটনে ক্লিক করুন (তিনটি ডট উপরে ডানদিকে) > <i>Settings</i> > <i>Cookies and site permissions</i> > <i>JavaScript</i> > <i>Allowed (recommended)</i> নির্বাচন করুন।</li>
                </ul>
                <h3>ফোন:</h3>
                <ul>
                    <li class="mt-3"><strong>Android (Chrome):</strong> মেনু বাটনে ক্লিক করুন (তিনটি ডট উপরে ডানদিকে) > <i>Settings</i> > <i>Site settings</i> > <i>JavaScript</i> > <i>Allowed</i> নির্বাচন করুন।</li>
                    <li class="mt-3"><strong>iOS (Safari):</strong> <i>Settings</i> অ্যাপে যান > <i>Safari</i> > <i>Advanced</i> > <i>JavaScript</i> সক্রিয় করুন।</li>
                </ul>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    
  </div>






  <style>
    td{
        font-size: 1.4rem;
    }
    th{
        font-size: 1.4rem;
    }

    .color-box{
        width: 20px;
        height: 20px;
        display: inline-block;
        border-radius: 50%;
    }
  </style>


<script>
    document.getElementById('rule-nav').classList.add('nav-active');
</script>


@endsection