

<div class="vh-10"></div>
<div class="ft">
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="/rsx/logo.svg" alt="" class="img-fluid">
                </div>
                <div class="col-md-8  df dfc jcc">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-1 text-light hind">অংকবাজ</h1>
                            <p class="lead text-light hind" style="text-align: justify">
                                অঙ্কবাজ একটি user end ভিত্তিক অনলাইন অঙ্ক চর্চা প্ল্যাটফর্ম। এখানে বিভিন্ন স্তরের শিক্ষার্থীরা অঙ্ক সমাধান করতে পারবে। সকল অঙ্কই সয়ঙ্কৃয়ভাবে 
                                তৎক্ষণাত প্রস্তুতকৃত। শিশুদের গণিতের প্রতি আগ্রহ ও গণিতচর্চা বৃদ্ধির জন্য একটি ছোট্ট উদ্যোগ। 
                            </p>
                            <div class="btn-group mt-2">
                                <a href="#" class="btn btn-outline-light" style="font-family: 'Hind Siliguri', sans-serif">হোম</a>
                                <a href="#" class="btn btn-outline-light" style="font-family: 'Hind Siliguri', sans-serif">লিডারবোর্ড</a>
                                <a href="#" class="btn btn-outline-light" style="font-family: 'Hind Siliguri', sans-serif">সকল অঙ্ক</a> 
                                @if(session('solver')!=null)
                                <a href="#" class="btn btn-outline-light" style="font-family: 'Hind Siliguri', sans-serif">{{session('solver')->name}}</a> 
                                @endif
                                <a href="#" class="btn btn-outline-light" style="font-family: 'Hind Siliguri', sans-serif">নিয়মকানুন</a> 
                                <a href="#" class="btn btn-outline-light" style="font-family: 'Hind Siliguri', sans-serif">অঙ্কবাজের গল্প</a>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <p class="text-light text-center lead" style="font-family: 'Hind Siliguri', sans-serif">© <span id="current-year"></span> <a href="https://portfolio.sakhawatadib.com" style="text-decoration: none" class="link-light">আদিব সাখাওয়াত</a>. সর্বস্বত্ব সংরক্ষিত</p>
                </div>
            </div>
        </div>
    </div>
</div>







<style>
    .footer-bg{
        background: rgb(24,60,94);
        background: linear-gradient(-60deg, rgba(24,60,94,.9) 0%, rgba(0,11,33,.9) 99%);
        min-height: 50vh;

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .ft{
        background-image: url('/rsx/ft.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
</style>


<script>
    document.getElementById('current-year').innerHTML = new Date().getFullYear();
</script>

</body>
</html>