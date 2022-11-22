<!DOCTYPE html>
<html lang="en">
<head>
    <title>Uşaqlar üçün Robototexnika Kursları</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="/frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/animate.css">

    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/frontend/css/magnific-popup.css">

    <link rel="stylesheet" href="/frontend/css/aos.css">

    <link rel="stylesheet" href="/frontend/css/ionicons.min.css">

    <link rel="stylesheet" href="/frontend/css/flaticon.css">
    <link rel="stylesheet" href="/frontend/css/icomoon.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159040066-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159040066-1');
</script>

</head>
<body>
<div class="py-2 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md-4 pr-4 d-flex topper align-items-center headersocial">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <a href="https://goo.gl/maps/i46vMn7Sv8uRdW7x9" target="_blank"><span class="text">Yasamal r, Hüseyn Cavid 147, Elmlər Ak. metrosu</span></a>
                    </div>
                    <div class="col-md pr-2 d-flex topper align-items-center headersocial">
                        <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></div>
                        <a href="https://www.facebook.com/pg/usaqlarucunrobototexnika" target="_blank"><span class="text">Facebook</span></a>
                    </div>
                    <div class="col-md pr-2 d-flex topper align-items-center headersocial">
                        <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></div>
                        <a href="https://www.instagram.com/robototexnikakurslari/" target="_blank"><span class="text">Instagram</span></a>
                    </div>
                    <div class="col-md pr-2 d-flex topper align-items-center headersocial">
                        <div class="icon bg-quarternary mr-2 d-flex justify-content-center align-items-center"><span class="icon-youtube"></span></div>
                        <a href="https://www.youtube.com/channel/UCo4cw0WbpBPCrZRXsuxpGbw" target="_blank"><span class="text">Youtube</span></a>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <a href="tel:+994774344819"><span class="text">+994 77 434 48 19</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="{{route('index')}}"><img src="/frontend/images/logo2.jpg" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item grow @if(Request::segment(1)=='') active @endif"><a href="{{route('index')}}" class="nav-link pl-0">{{ __('messages.Home') }}</a></li>
                <li class="nav-item grow @if(Request::segment(1)=='about') active @endif"><a href="{{route('about')}}" class="nav-link">{{ __('messages.About') }}</a></li>
                <li class="nav-item grow @if(Request::segment(1)=='courses') active @endif"><a href="{{route('courses')}}" class="nav-link">{{ __('messages.Courses') }}</a></li>
                <li class="nav-item grow @if(Request::segment(1)=='articles') active @endif"><a href="{{route('articles')}}" class="nav-link">{{ __('messages.Blog') }}</a></li>
                <li class="nav-item grow @if(Request::segment(1)=='contact') active @endif"><a href="{{route('contact')}}" class="nav-link">{{ __('messages.Contact') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
@yield('main_content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Bizimlə əlaqə</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text"><a href="https://goo.gl/maps/i46vMn7Sv8uRdW7x9" target="_blank"><span class="text">Yasamal r, Hüseyn Cavid 147, Elmlər Ak. metrosu</span></a></span></li>
                            <li><a href="tel:+994774344819"><span class="icon icon-phone"></span>+994 77 434 48 19</a></li>
                            <li><a href="mail:robototexnikakurslari@gmail.com"><span class="icon icon-envelope"></span><span class="text">robototexnikakurslari@gmail.com</span></a></li>
                        </ul>
                    </div>

                    <div class="ftco-footer-widget mb-5">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a class="grow" href="https://www.youtube.com/channel/UCo4cw0WbpBPCrZRXsuxpGbw" target="_blank"><span class="icon-youtube"></span></a></li>
                            <li class="ftco-animate"><a class="grow" href="https://www.facebook.com/pg/usaqlarucunrobototexnika" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a class="grow" href="https://www.instagram.com/robototexnikakurslari/" target="_blank"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-9 col-lg-9">
                <div class="ftco-footer-widget mb-5">
                    <iframe width="100%" height="250px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3039.499867550141!2d49.812230615427886!3d40.37561267936995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307deafee81dd1%3A0x56c8e9fe951aa23b!2zVcWfYXFsYXIgw5zDp8O8biBSb2JvdG90ZXhuaWthIEt1cnNsYXLEsQ!5e0!3m2!1saz!2s!4v1559578072873!5m2!1saz!2s" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            
        </div>
        <div class="d-flex justify-content-center">
            <p class="ftco-animate text-info">This site created by <a class="grow" href="https://www.linkedin.com/in/nicat-səmədov-661253215/" target="_blank">Nicat Semedov</a></p>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/frontend/js/popper.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.easing.1.3.js"></script>
<script src="/frontend/js/jquery.waypoints.min.js"></script>
<script src="/frontend/js/jquery.stellar.min.js"></script>
<script src="/frontend/js/owl.carousel.min.js"></script>
<script src="/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="/frontend/js/aos.js"></script>
<script src="/frontend/js/jquery.animateNumber.min.js"></script>
<script src="/frontend/js/scrollax.min.js"></script>
<script src="/frontend/js/main.js"></script>
@yield('js')
</body>
</html>