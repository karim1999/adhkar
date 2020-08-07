<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/pretty-checkbox.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200&display=swap" rel="stylesheet">
    @php
    $api= \App\Http\Controllers\ApiController::get_content();
    //debug api response {{dd($api)}}
    @endphp
    <?php $version= '?v='.time(); ?>
    <link rel="icon" type="image/png" href="@if(session('language')==" ar") {{$api['site_profile']->icon_ar}} @else {{$api['site_profile']->icon_en}} @endif " />
     <meta name=" description" content="
     @if(session('language')==" ar") {{$api['site_profile']->site_description_ar}} @else {{$api['site_profile']->site_description_en}} @endif ">
     <title>
       @if(session('language')==" ar") {{$api['site_profile']->site_name_ar}} | {{$api['site_profile']->site_sub_name_ar}} @else {{$api['site_profile']->site_name_en}} | {{$api['site_profile']->site_sub_name_en}} @endif </title> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="
     @if(session('language')==" ar") {{$api['site_profile']->ar_keywords}} @else {{$api['site_profile']->en_keywords}} @endif ">
     {!!$api['site_profile']->google_analytics!!}
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174669370-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-174669370-3');
    </script>
</head>
<body>

<div class=" col-12 px-0">
  <style type="text/css">
    .row{
      margin: 0px;
    }
  </style>
    <div class="col-12 px-0">
        @if(session('language')=="ar" && session('popup_status')!="false" && $api['advs']->popup_status==1)
        {!!$api['advs']->popup_ar!!}
        @else
        {!!$api['advs']->popup_en!!}
        @endif
    </div>
    @if($api['advs']->header_status==1 &&  session('header_status')!="false")
        <div class="col-12 px-0" style="background-color: #EB593C; color: white; text-align: center; padding: 5px">
            @if(session('language')=="ar")
                {!!preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $api['advs']->header_ar)!!}
            @else
                {!!preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $api['advs']->header_en)!!}
            @endif
        </div>
    @endif
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content py-3 px-3 tajawal" style="z-index: 5555;position: relative;font-weight: bold;font-size: 20px">
            </div>
        </div>
    </div>
    <div id="header">
        <nav class="navbar navbar-expand-lg nav-bg  py-1" style="position: fixed;z-index: 2">
            <a href="{{env('APP_URL')}}" class="navbar-brand">
                @if(session('language')=='ar' )
                <img src="{{$api['site_profile']->logo_ar_path}}" style="width: 100px;height: 40px;display: inline-block;" id="site-logo">
                @elseif(session('language')=='ar')
                <img src="{{$api['site_profile']->logo_ar_path_dark}}" style="width:100px;height: 40px; display: inline-block;" id="site-logo">
                @elseif(session('language')!='ar' && session('mode')=='day')
                <img src="{{$api['site_profile']->logo_en_path}}" style="width:100px;height: 40px; display: inline-block;" id="site-logo">
                @elseif(session('language')!='ar' && session('mode')=='night')
                <img src="{{$api['site_profile']->logo_en_path_dark}}" style="width:100px;height: 40px; display: inline-block;" id="site-logo">
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="">تعديل خط الأذكار </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">نسخة أذكار للطباعة </a>
                    </li> --}}
                </ul>
                <div class="mr-auto ">
                    {{-- <a class="nav-link exclamation" href="">
                        <img src="img/layer1.png" class="mx-2" height="15px" width="15px" alt="" srcset="">
                        حول اذكار
                    </a> --}}
                </div>
            </div>
            {{-- <img src="img/bar-1.png" class="img-bar" id="open-side" height="20px" width="20px" srcset=""> --}}
        </nav>
    </div>
    <section class="to-top mb-5">
        @if(isset($is_home))
        <img style="margin-left: auto; margin-right: auto; display: block;" src="{{asset('img/title.png')}}" alt="">
        @endif
        <div class="container">
            <div class="container2">
                <div class="row m-2">
                    @foreach($azkar as $zkr)
                    <div class="col-md-6 col-lg-6 col-xl-4 col-12  my-2 mx-auto">
                        <div class="azkar shadow" style="min-height: 150px">
                            <div class="disc">
                                <div>
                                    {{mb_strimwidth($zkr->content, 0, 120, "...")}}
                                </div>
                                <div class="d-none" id="bar-{{$zkr->id}}">
                                    {{$zkr->content}}
                                </div>
                                <div class="button-option">
                                    <div class="row">
                                        <div class="col-3 pt-5 px-1">
                                            <div class="count pt-2 d-inline-block col-12" style="font-size: 14px;margin-top: 2px;padding-top: 3px">
                                                {{$zkr->count_number}} مرات
                                            </div>
                                        </div>
                                        <div class="col-7 pt-5 px-1">
                                            <div class="count-inp py-1 border-5 position-relative">
                                                <button class="plus" style="">
                                                    <i class="fas fa-plus" class="plus"></i>
                                                </button>
                                                <span class="count-num" count-num="0" count-target="{{$zkr->count_number}}">0</span>
                                                <button class="refresh">
                                                    <i class="fas fa-sync" class="sync"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-2 pt-5 ">
                                            <div class="add px-3 text-center d-flex justify-content-center align-items-center py-1 border-5" data-toggle="modal" data-target=".bd-example-modal-lg" style="cursor: pointer;" data-content="#bar-{{$zkr->id}}">
                                                <img src="/img/book.png" class="pt-1" alt="" height="28px" width="28px" srcset="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="trans d-flex  align-items-end px-0">
                                    <div class="col-12 px-0">
                                        <div class="row mx-1 mb-3 px-0">

                                            <div class="col px-1 mb-1">
                                                    <button class="copy-zakr w-100 px-1 py-2 border-5 btn-success" style="outline: none!important;box-shadow:unset!important;font-size: 14px" data-clipboard-action="cut" data-clipboard-target="#bar-{{$zkr->id}}">انسخ</button>
                                            </div>
                                            <a href="https://api.whatsapp.com/send?text={{mb_strimwidth($zkr->content, 0, 120, "...")}}" class="col px-1 mb-1">
                                                  <div class="social w-100 px-3 py-2 border-5"><i class="fab fa-whatsapp"></i></div>

                                            </a>
                                            <a href="https://twitter.com/intent/tweet?text={{mb_strimwidth($zkr->content, 0, 120, "...")}}&url={{\Request::url()}}
                                                  " class="col px-1 mb-1">
                                                    <div class="social w-100 px-3 py-2 border-5"><i class="fab fa-twitter"></i></div>
                                            </a>
                                            <a href="https://www.facebook.com/sharer.php?u={{\Request::url()}}" class="col px-1 mb-1">

                                                  <div class="social w-100 px-3 py-2 border-5"><i class="fab fa-facebook-f"></i></div>
                                            </a>
                                            <a href="https://www.facebook.com/sharer.php?u={{\Request::url()}}" class="col px-1 mb-1">
                                                  <div class="social w-100 px-3 py-2 border-5"><i class="fab fa-telegram-plane"></i></div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container sec-btn mb-5">
            <h2 class="text-center mb-4 tajawal" style="color: #fff;font-weight: bold">كل الأذكار</h2>
            <div class="row">
                @php
                $categories=\App\Category::get();
                @endphp
                @foreach($categories as $category)
                <div class="col-md-3 my-2 mx-auto">
                    <a href="{{route('category',$category)}}">
                        <button class="w-100 shadow border-5 py-2 tajawal btn-info" style="color: #fff;font-weight: bold">{{$category->name}}</button>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="side-nav">
        <img src="img/bar-2.png" alt="" id="close-side" class="close-side" height="20px" width="20px" srcset="">
        <ul class="mt-4 px-2">
            <li>تعديل خط الأذكار</li>
            <li class="py-2">
                <div class="pretty p-svg p-curve ">
                    <input type="checkbox" />
                    <div class="state p-success">
                        <!-- svg path -->
                        <svg class="svg svg-icon" viewBox="0 0 20 20">
                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: #000;fill:#000;"></path>
                        </svg>
                        <label class="px-1">إظهار التشكيل</label>
                    </div>
                </div>
            </li>
            <li class="py-2">
                <div class="pretty p-svg p-curve ">
                    <input type="checkbox" />
                    <div class="state p-success">
                        <!-- svg path -->
                        <svg class="svg svg-icon" viewBox="0 0 20 20">
                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: #000;fill:#000;"></path>
                        </svg>
                        <label class="px-1 tall"> الخط القرآني في القرآن</label>
                    </div>
                </div>
            </li>
            <li class="py-2">
                <div class="pretty p-svg p-curve ">
                    <input type="checkbox" />
                    <div class="state p-success">
                        <!-- svg path -->
                        <svg class="svg svg-icon" viewBox="0 0 20 20">
                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: #000;fill:#000;"></path>
                        </svg>
                        <label class="px-1"> تغليظ الخط العادي </label>
                    </div>
                </div>
            </li>
            <li class="px-1 py-1">
                <a href="">نسخة أذكار للطباعة</a>
            </li>
            <li class="px-1 py-1">
                <a href=""> كل الأذكار</a>
            </li>
            <li class="px-1 py-1">
                <a href=""> حول اذكار</a>
            </li>
        </ul>
    </div>
    <script src="/js/jquery-3-4-1-min.js"></script>
    <script type="text/javascript" src="/js/copying.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="https://footer.devlab.ae/public/styles.css">
    @if(session('language')!='en')
    <!--#171734 = night background color & f5f7fb = day background color -->
    <iframe src="https://footer.devlab.ae/ar?mode={{session('mode')}}&night_bg=171734&day_bg=f5f7fb" class="col-12 footer-iframe px-0" style="width: 100%" id="devlab-footer"></iframe>
    @else
    <iframe src="https://footer.devlab.ae/en?mode={{session('mode')}}&night_bg=171734&day_bg=f5f7fb" class="col-12 footer-iframe px-0" style="width: 100%" id="devlab-footer"></iframe>
    @endif
    @if(session('language')=="ar" && $api['footer']->footer_ar_enabled==1)
    {!!$api['footer']->footer_ar!!}
    @elseif($api['footer']->footer_en_enabled==1)
    {!!$api['footer']->footer_en!!}
    @endif


    <!--footer 3-->
    <script type="text/javascript">
    function update_mood() {
        //must check current mode in frontend - or backend -
        $.ajax({
            method: "get",
            url: "/update_mode",
            data: { mode: 'night' }
        }).done(function(msg) {});
        $.ajax({
            method: "get",
            url: "/update_mode",
            data: { mode: 'day' }
        }).done(function(msg) {});
    }
    var clipboard = new ClipboardJS('.copy-zakr');

    clipboard.on('success', function(e) {
        console.log(e);
    });
    clipboard.on('error', function(e) {
        console.log(e);
    });
    $('.add').on('click', function() {
        $('.modal-content').empty().text($($(this).data('content')).text());
    });


    /*  $('.copy-zakr').on('click',function(){
       var text = $($(this).data('copy')).text();
       $("<textarea/>").appendTo("body").val(text).select().each(function () {
           document.execCommand('copy');
       }).remove();

       alert();

       document.execCommand('copy');
      });*/

    </script>
    </body>

</html>
