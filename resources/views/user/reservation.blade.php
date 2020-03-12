<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
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
                            <a class="nav-link text" href="index.html" style="font-size: 16px;">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text" href="gallery.html" style="font-size: 16px;margin-right: 5px;" >المعرض</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link text" href="about.html" style="font-size: 16px;margin-right: 5px;" >من نحن</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link text" href="reservation.html" style="font-size: 16px;margin-right: 5px;" >احجز معنا </a>
                        </li> 
                </ul>
            </div>
        </div>
    </nav>
    <div >
        <img src="img/r1.jpg" alt="background image" width="100%" height="400px">
    </div>
    <br><br>
    <div class="container section1 "  >
        <h3 class="text" style="color: black !important;direction: rtl; text-align: center;">احجز معنا</h3>
        
            <form class="form-group row">
                <div class="col-md-6">
            <input type="text" class="form-control" placeholder="اسم المستخدم" required style="width: 100%;">
            <br><br>
                    <input type="text" class="form-control"  placeholder="رقم الهاتف" required>
                </div>
                
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="البريد الالكتروني" required style="width: 100%;">
                    <br><br>
                    <input type="text" class="form-control"  placeholder="العنوان" required>
                    </div>
                    
                    <br>
                    <textarea  class="form-control"  cols="20" rows="10" placeholder="المطلوب فعله " style="width: 100%;margin-top:20px;" required></textarea>
                    
                    <input type="submit" value="إرسال" class="btn btn-primary bsec1" style="direction: rtl;margin-top: 5px;margin-left: 45%;">
        </form>

       
    </div>



    <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
        <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3">
        <div class="widget subscribe no-box">
        <h5 class="widget-title" style="text-align: center;"><img src="img/logo.png" alt="logo" width="20%"></h5>
        <p class="tsec1" style="font-size: 12px;">التميز بتفاصيل التصميم وتنفيذ
            كافه الديكورات والمفروشات لكي نقدم لكم أرق التصاميم الداخلية بتفاصيلها
            على الطراز الحديث.</p>
        </div>
        </div>
        <div class=" col-md-1"></div>
        <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="widget no-box">
        <h5 class="widget-title">روابط سريعة<span></span></h5>
        <ul class="thumbnail-widget">
        <li>
        <div class="text"><a href="#.">الرئيسية</a></div>	
        </li>
        <li>
        <div class="text"><a href="#.">المعرض</a></div>	
        </li>
        <li>
            <div class="text"><a href="#.">من نحن</a></div>	
            </li>
        </ul>
        </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="widget no-box" >
        <h5 class="widget-title" >اتصل بنا<span></span></h5>          
        <p class="text" style="margin-left: 30px;position: relative;">0505563337</p>
        <img src="img/phone.png" style="bottom: 30px;position: relative;">
        <p  class="text" style="margin-left: 30px;bottom: 40px;position: relative;">0555024466</p>
        <ul class="social-footer2">
        <a style="color: white;size: 20px;" title="pinterest" target="_blank" href="https://www.pinterest.com/janahalamirah"><img src="img/pinterest .png" width="30" height="30"></a>
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
        <p>Copyright © 2020. All rights reserved.</p>
        </div>
        </div>
        </div>
        </div>
        </footer>
</body>
</html>