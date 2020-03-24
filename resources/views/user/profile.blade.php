<style>body{background:white !important;}</style>
@extends('user.layouts.app')
@section('title', Auth::user()->name )
@section('user')
<div class="container" > 
  <div class="row" >
  <div class="col-md-12 col-12" style="margin-top: 50px;">
            <div class="container section1" >
                <div class="text" style="text-align:center">الصفحه الشخصيه</div>

  @if(count($data) > 0)
    @foreach($data as $d)
    
    <div class="col-md-10 offset-md-1 "  >
      <div class="card col-md-12 " style=" margin-top: 20px;border: 1px solid #ff8d1e;">
            <br>
      <h4 class="text" style="justify-content:right;display:flex;">العنوان</h4>
      <p class="text" style="justify-content:right;display:flex;color:black !important;padding-bottom:0px">{{($d->address)}}</p>
      <hr>
      <h4 class="text" style="justify-content:right;display:flex">رقم الهاتف</h4>
      <p class="text" style="justify-content:right;display:flex;color:black !important">{{($d->phone)}}</p>
      <hr>
      <h4 class="text" style="justify-content:right;display:flex">الحجز الذي قمت به</h4>
      <p class="text" style="justify-content:right;display:flex;color:black !important">{{($d->msg)}}</p>
      <hr>
      @if(!empty($d->comment))
      <h4 class="text" style="justify-content:right;display:flex">تعليق الاداره</h5>
      <h2 style="justify-content:right;display:flex;color:black !important">{{($d->comment)}}</h2>
      @else
      <h2 class="text" style="text-align:center">لا تعليق حتى الان</h2>
      @endif
        <div class="card-body">
          <a href="/reservation/{{$d->orderId}}" class="btn btn-primary bsec1" style="justify-content:right;display:flex;">حذف الحجز</a>
        </div>
        

        </div>
      </div>          
    @endforeach
  @else
    <hr><br><br>
    <h2 class="text" style="text-align:center">لا يوجد حجز حتى الان</h2>
  @endif
            </div>
        </div>
</div>
</div>
@endsection