<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gallery</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
    <link rel="stylesheet" href="css/jquery.scrollbar.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style-gallery.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <!-- START NAVBAR -->
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm nav" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/logo.png" alt="" width="80px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" >
                    <span class="navbar-toggler-icon " ></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav " style="direction: rtl;" >
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link text btn" href="login.html" style="font-size: 10px;color: wheat !important;opacity: 0.7;" >تسجيل الدخول                                </a>
                        </li> 

                        <li class="nav-item">

                                <a class="nav-link text" href="{{url('/')}}" style="font-size: 16px ;margin-right: 5px">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text" href="{{url('/gallery')}}" style="font-size: 16px;margin-right: 5px;" >المعرض</a>
                            </li>   
                            <li class="nav-item">
                                <a class="nav-link text" href="{{url('about')}}" style="font-size: 16px;margin-right: 5px;" >من نحن</a>
                            </li>   
                            
                            
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

    <!-- ------------this is gallery stary------------------ -->
    <div class="site-wrap">
        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
      
        <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <!-- FIRST ICON OF GALLERY SILDER -->
      <div class="swiper-slide cover" style="background-image: url('images/g1.jpg'); background-size:100%;">
        <a style="border-radius: 10px;" href="images/g1.jpg" data-fancybox="gallery" class="zoom"><span class="icon-search"></span></a>
        <a href="reservation.html" class="img-info" style="border-radius: 10px;">
          <p style="text-align: center; position: relative;bottom:15px;right: 20px;color: chocolate;" >للحجز</p>
        </a>
      </div>
  
      </div>
      
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
      </div>
      <div class="swiper-container gallery-thumbs">
      <div class="swiper-wrapper">
      <div class="swiper-slide cover" style="background-image:url(images/g1.jpg)"></div>

      </div>
      </div>
      </div> <!-- .site-wrap -->
      <!-- END GALLERY -->
<!-- GALLERY SCRIPT -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/swiper.min.js"></script>
      <script src="js/jquery.scrollbar.js"></script>
      <script src="js/main.js"></script>
      <!-- END GALLERY SCRIPT -->
        
      <footer id="footer" class="footer-1" style="border-top: #ebba41 1px solid;" data-aos="fade-up">
            <div class="main-footer widgets-dark typo-light">
            <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="widget subscribe no-box">
            <h5 class="widget-title" style="text-align: center;"><img src="img/logo.png" alt="logo" width="20%"></h5>
            <p class="tsec1" style="font-size: 12px;color: #ebba41;">التميز بتفاصيل التصميم وتنفيذ
                كافه الديكورات والمفروشات لكي نقدم لكم أرق التصاميم الداخلية بتفاصيلها
                على الطراز الحديث.</p>
            </div>
            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-4" style="justify-content: center;display: flex;">
            <div class="widget no-box">
            <h5 class="widget-title">روابط سريعة<span></span></h5>
            <ul class="thumbnail-widget">
            <li>
            <div><a href="{{url('/')}}" class="text">الرئيسية</a></div>	
            </li>
            <li>
            <div><a href="{{url('/gallery')}}" class="text">المعرض</a></div>	
            </li>
            <li>
            <div><a href="{{url('/about')}}" class="text">من نحن</a></div>	
            </li>
            </ul>
            </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-4" style="justify-content:center;display: flex;">
            <div class="widget no-box" >
            <h5 class="widget-title" >اتصل بنا<span></span></h5>          
            <p class="text" style="margin-left: 30px;position: relative;">0505563337</p>
            <img src="img/phone.png" style="bottom: 30px;position: relative;">
            <p  class="text" style="margin-left: 30px;bottom: 40px;position: relative;">0555024466</p>
            <ul class="social-footer2">
            
            <a href="https://www.facebook.com/janahalamirah" target="_blank" title="Facebook"><img alt="Facebook" width="30" height="30" src="img/facebook.png"></a>
            <a href="https://twitter.com/janahalamirah" target="_blank" title="Twitter"><img alt="Twitter" width="30" height="30" src="img/twitter.png"></a>
            <a title="instagram" target="_blank" href="https://www.instagram.com/janahalamirah/"><img alt="instagram" width="30" height="30" src="img/instagram.png"></a>
            </ul>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="footer-copyright">
            <div class="container">
            <div class="row">
            <div class="col-md-12 text-center">
            <p style="color: wheat !important;">Copyright © 2020. All rights reserved.</p>
            </div>
            </div>
            </div>
            </div>
            </footer>
            <!-- END SECTION FOOTER -->
    </div>  
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
