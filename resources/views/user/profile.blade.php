<style>body{background:white !important;}</style>
@extends('user.layouts.app')
@section('user')
<div class="container" > 
<div class="row" >
        <div class="col-md-12 col-12" style="margin-top: 50px;">
            <div class="container section1" >
                <div class="text" style="text-align:center">الصفحه الشخصيه</div>

                <div class="col-md-12 " >
                  <div class="card col-md-12 " style=" margin-top: 20px;justify-content:right;display:flex">
                        <br>
                  <h5 class="text" style="justify-content:right;display:flex">العنوان</h5>
                  <p style="justify-content:right;display:flex">{{(Auth::user()->address)}}</p>
                  <hr>
                  <h5 class="text" style="justify-content:right;display:flex">رقم الهاتف</h5>
                  <p style="justify-content:right;display:flex">{{(Auth::user()->phone)}}</p>
                  <hr>
                  <h5 class="text" style="justify-content:right;display:flex">الحجز الذي قمت به</h5>
                  <p style="justify-content:right;display:flex">{{(Auth::user()->phone)}}</p>
                    <div class="card-body">
                      <a href="#" class="btn btn-primary bsec1" style="justify-content:right;display:flex;">تعديل</a>
                   </div>
                   
                    </div>
                  </div>

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
            </div>
        </div>
</div>
</div>
@endsection