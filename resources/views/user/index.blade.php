@extends('user.layouts.app')
@section('title','Home')
@section('user')

<!-- start carousel -->
              <div class="container-fluid imgcar" >
                <div class="tcarousel text" >
                    <img src="img/logo.png" width="21.9%" alt="janahalamirah" style="margin-left: 20px;" data-aos="flip-left">
                    <h1 data-aos="flip-left" >جناح الأميرة</h1>
                    <h2 data-aos="flip-left">للديكور و المفروشات</h2>
                    </div>
                </div>
           
        <!-- END carousel -->
        
        <!-- START FIRST SECTION ABOUT US -->
        <div class="container section1 "  data-aos="fade-down" >
            <div class="row">
                <div class="col-12  col-lg-5 col-sm-12 col-xs-12">
                    <img src="{{asset('img/sec.jpeg')}}" width="100%" height="400px" style=" justify-content: center ; display: flex;" class="imgsec1"  alt="">
                </div>
                <div class="col-12 col-lg-7 col-sm-12 " >
                    <br>
                    <h1 class="text " style="float: right;border-bottom: 2px solid;border-radius: 5px;">من نحن</h1>
                    <br><br><br>
                    <p class="tsec1">تقدم مؤسسة جناح الأميرة للمقاولات والديكور والمفروشات التصميم الداخلي
                        التي انفردت بة منذ أن تأسست في عام 2001 م لتقدم لكم الديكور الداخلي
                        الذي يناسب جميع الأذواق بمفهوم عصري غير تقليدي حيث تنفرد بة مبنية
                        على أسس لتلبية احتياجات المكان وبأسعار منافسة ومتناولة لكل من يقصدها
                        نحن متميزون في جميع الأعمال وبأسلوب راقي معتمدون على خبرتنا الطويلة في
                        هذا المجال .
                    </p>
                    <a href="about.html" class="btn btn-primary bsec1">للمزيد</a>
                </div>
            </div>
        </div>
        <!-- END FIRST SECTION ABOUT US -->
        <!-- START SECOND SECTION CATEGORY -->
        <div class="container section1 "  data-aos="fade-up" >
            <div class="row">
                <h1 class="text" style="width: 100%;text-align: center;padding-bottom: 20px;">الاقسام</h1>
  
                <div class=" col-md-4 " >
                  <div class="card" style="height:360px;margin-bottom: 10px;background:rgba(3, 4, 24,0.5);border: #ff8d1e 1px solid; ">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style=" border-bottom: #ff8d1e 1px solid;">
                    <div class="carousel-inner" >
                          <div class="carousel-item active">
                            <img class="card-img-top img-fluid" src="{{asset('img/d1.jpg')}}" style="height:200px;" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img-top img-fluid" src="{{asset('img/g2.jpg')}}"  style="height:200px;" alt="Second slide">
                          </div>
                  </div>
                        
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text cl">التصميم الداخلي</h4>
                      <br><br>
                      <p class="card-text text cl">نصمم منزل أحلامك وفق قيم جمالية تلامس خيالك</p> 
                      <br><br>
                      <a href="{{url('/reservation')}}" class="btn btn-primary bsec1">للحجز</a>
                    </div>
                    
                  </div>
                </div>
                
                
                <div class=" col-md-4">
                <div class="card" style="height:360px;margin-bottom: 10px;background:rgba(3, 4, 24,0.5);border: #ff8d1e 1px solid; ">
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" style=" border-bottom: #ff8d1e 1px solid;">
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-img-top img-fluid" src="{{asset('img/f1.jpg')}}" style="height:200px;" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img-top img-fluid" src="{{asset('img/g3.jpg')}}"  style="height:200px;" alt="Second slide">
                          </div>
                  </div>
                        
                        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text cl">التصميم الخارجي</h4>
                      <p class="card-text text cl">نقوم بإثراء واجهتك بتصاميم تضفي على المنزل نوعا من الفخامة والتميز</p>
                      <a href="{{url('/reservation')}}" class="btn btn-primary bsec1">للحجز</a>
                    </div>
                  </div>
                </div>




                <div class="col-md-4">
                <div class="card" style="height:360px;margin-bottom: 10px;background:rgba(3, 4, 24,0.5);border: #ff8d1e 1px solid; ">
                    <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel" style=" border-bottom: #ff8d1e 1px solid;">
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-img-top img-fluid" src="{{asset('img/g4.jpg')}}" style="height:200px;" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img-top img-fluid" src="{{asset('img/g5.jpg')}}"  style="height:200px;" alt="Second slide">
                          </div>
                  </div>
                        
                        <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text cl">التصميم التجاري</h4>
                     
                      <p class="card-text text cl">نبتكر فنبدع في تصميم يعكس هويتك ويحقق راحتك وراحة عملائك</p>
                      <a href="{{url('/reservation')}}" class="btn btn-primary bsec1">للحجز</a>
                    </div>
                  </div>
                </div>

                <div class=" col-md-4">
                <div class="card" style="height:360px;margin-bottom: 10px;background:rgba(3, 4, 24,0.5);border: #ff8d1e 1px solid; ">
                    <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel" style=" border-bottom: #ff8d1e 1px solid;">
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-img-top img-fluid" src="{{asset('img/d1.jpg')}}" style="height:200px;" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img-top img-fluid" src="{{asset('img/d1.jpg')}}"  style="height:200px;" alt="Second slide">
                          </div>
                  </div>
                        
                        <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body" style="direction: rtl !important;">
                      <h4 class="card-title text cl">تصميم الحدائق</h4>
                      <p class="card-text text cl" style="direction: rtl !important;" >نصمم من لا شي جنة في منزلك لتنعم فيها بالهدوء والراحة والجمال
                        اسكتشات
                      
                      </p>
                      <a href="{{url('/reservation')}}" class="btn btn-primary bsec1">للحجز</a>   
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                <div class="card" style="height:360px;margin-bottom: 10px;background:rgba(3, 4, 24,0.5);border: #ff8d1e 1px solid; ">
                    <div id="carouselExampleControls5" class="carousel slide" data-ride="carousel" style=" border-bottom: #ff8d1e 1px solid;">
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-img-top img-fluid" src="{{asset('img/d1.jpg')}}" style="height:200px;" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img-top img-fluid" src="{{asset('img/d1.jpg')}}"  style="height:200px;" alt="Second slide">
                          </div>
                  </div>
                        
                        <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text cl">إكسسوارات وتحف</h4>
                      <br><br>
                      <p class="card-text text cl" style="display: flex; justify-content: right;">نختارها وننتقيها بعناية لكي نتميز بها ونصنع ماهو يخصنا</p>
                      <br><br>
                      <a href="{{url('/reservation')}}" class="btn btn-primary bsec1">للحجز</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" >
                <div class="card" style="height:360px;margin-bottom: 10px;background:rgba(3, 4, 24,0.5);border: #ff8d1e 1px solid; ">
                    <div id="carouselExampleControlss" class="carousel slide" data-ride="carousel" style=" border-bottom: #ff8d1e 1px solid;">
                    <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-img-top img-fluid" src="{{asset('img/d1.jpg')}}" style="height:200px;" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-img-top img-fluid" src="{{asset('img/d1.jpg')}}"  style="height:200px;" alt="Second slide">
                          </div>
                  </div>
                        
                        <a class="carousel-control-prev" href="#carouselExampleControlss" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControlss" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title text cl">اسكتشات</h4>
                      <p class="card-text text cl">إبداع الرسم الأولي الحر للإيصال فكرة للعميل للفراغ وتبسيط الفكرة  الإسكِتْش يعتبر من أهم المهارات </p>
                      <a href="{{url('/reservation')}}" class="btn btn-primary bsec1">للحجز</a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- END SECOND SECTION CATEGORY -->
        <div class="container-fluid contact" data-aos="zoom-in">
            <div class="container">
                <h3 class="text" style="direction: rtl; text-align: center;"><img  src="img/location.png">تواصل معنا <img  src="img/location.png"></h3>
                    <form class="form-group row" method="post" action="{{ action('guestController@store') }}">
                    {{csrf_field()}}
                        <div class="col-md-6 col-sm-12" style="margin-top: 20px;direction: rtl !important;">
                            <input type="text" class="form-control" name="name" placeholder="اسم المستخدم" required style="width: 45%;display: inline-block;">
                            <input type="text" class="form-control" name="phone" placeholder="رقم الهاتف" required style="width: 45%;float: right;">
                            <br><br>
                            <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required style="width: 100%"><br>
                            <input type="text" class="form-control" name="address" placeholder="العنوان" required style="width: 100%">
                            <br>
                            <textarea  class="form-control" name="msg" cols="20" rows="10"  placeholder="الرساله" style="width: 100%;height: 150px;resize: none;" required></textarea>
                            <input type="submit" value="إرسال" class="btn btn-primary bsec1" style="direction: rtl;margin-top: 20px;margin-left: 45%;">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3715.136257893197!2d39.82922558558666!3d21.384538880914263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c205309dfbe3b1%3A0x7081ac61d06a1e1e!2z2KzZhtin2K0g2KfZhNij2YXZitix2Kkg2YTZhNiv2YrZg9mI2LHigI4g2YjYp9mE2YXZgdix2YjYtNin2Ko!5e0!3m2!1sar!2seg!4v1583348937826!5m2!1sar!2seg" width="100%" height="380" frameborder="0" style="margin-top: 20px;border: 1px solid #ff8d1e;border-radius: 10px;" allowfullscreen=""></iframe> 
                        </div>
                </form>
                
            </div>
        </div>

       @endsection