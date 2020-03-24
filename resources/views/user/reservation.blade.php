@extends('user.layouts.app')

@section('user')
    
    <br><br>
    <div class="container section1 "  >
        <h3 class="text" style="direction: rtl; text-align: center;">احجز الان</h3>
        
            <form class="form-group row" method="POST" action="{{ route('reserupdate') }}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{(Auth::user()->id)}}">
            <div class="col-md-12 col-sm-12" style="margin-top: 20px;">
            <input type="text" name="name" class="form-control" value="{{$data->name}}"   required style="width: 100%;">
            <br>
             <input type="text" name="phone" class="form-control" value="{{$data->phone}}"   required style="width: 100%;">
            <br>       
            <input type="text"  name="address" class="form-control" value="{{$data->address}}" required style="width: 100%;">
            <textarea  class="form-control" name="msg"  cols="20" rows="10" placeholder="المطلوب فعله " style="width: 100%;margin-top:20px;" required></textarea>
                </div>
            <input type="submit" value="إرسال" class="btn btn-primary bsec1" style="direction: rtl;margin-top: 5px;margin-left: 45%;">
        </form>

       
    </div>

@endsection