@extends('layouts.app')
@section('content')
<div class="col-md-9 col-9" style="margin-top: 50px;">
<div class="container section1" >
                    <div>
                        <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                            {{csrf_field()}}
                            <span class="login100-form-title p-b-59 text" style="display: flex;justify-content: center ;">                
                                مستخدم جديد</span>
                                <div class="col-md-12">
                                    <span class="text" style="float: right;" >الاسم</span>
                                    <input class="form-control" type="text" name="name" placeholder="الاسم" required>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="col-md-12">
                                    <span class="text" style="float: right;" >العنوان</span>
                                    <input class="form-control" type="text" name="address" placeholder="العنوان" required>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="col-md-12">
                                    <span class="text" style="float: right;" >رقم الهاتف</span>
                                    <input class="form-control" type="text" name="phone" placeholder="رقم الهاتف" required>
                                    <span class="focus-input100"></span>
                                </div>
        
                            <div class="col-md-12">
                                <span class="text" style="float: right;" >البريد الالكتروني</span>
                                <input class="form-control" type="email" name="email" required placeholder="البريد الالكتروني">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            </div>
        
                            <div class="col-md-12">
                                <span class="text" style="float: right;" >كلمة المرور</span>
                                <input class="form-control" type="password" name="password" required placeholder="كلمة المرور">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            </div>
                           <div class="col-md-12">
                                <span class="text" style="float: right;" >اعد كلمة المرور </span>
                                <input class="form-control" type="password" name="password_confirmation" required placeholder="كلمة المرور">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100"></span>
                            
                            <input type="submit" value="الدخول" class="btn btn-primary bsec1" style="direction: rtl;margin-top: 20px;width: 100%;">     
                        </form>
                </div>


        </div>
        </div>
@endsection