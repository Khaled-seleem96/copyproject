@extends('user.layouts.app')

@section('user')
    
    <br><br>
    <div class="container section1 "  >
        <h3 class="text" style="direction: rtl; text-align: center;">احجز الان</h3>
        
            <form class="form-group row" method="POST">
            <div class="col-md-12 col-sm-12" style="margin-top: 20px;">
             <input type="text" class="form-control"  placeholder="رقم الهاتف" required style="width: 100%;">
            <br>       
            <input type="text" class="form-control"  placeholder="العنوان" required style="width: 100%;">
            <textarea  class="form-control"  cols="20" rows="10" placeholder="المطلوب فعله " style="width: 100%;margin-top:20px;" required></textarea>
                </div>
            <input type="submit" value="إرسال" class="btn btn-primary bsec1" style="direction: rtl;margin-top: 5px;margin-left: 45%;">
        </form>

       
    </div>

@endsection