<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
    body
    {
        background:white !important;
    }

    </style>
</head>
<body>
    <div id="app">
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
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown navbar-nav">
                                <a href="#" class="dropdown-toggle nav-link text btn" style="color:white !important" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu ">
                                    <li>
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                        </ul>
                </div>
            </div>
        </nav>
        <div class="container" > 
            <div class="row" >
        @yield('content')
        @auth
        <div class="col-4 col-md-4" style="margin-top: 100px;">
                <ul class="list-group">
                    <a href="{{route('content')}}" class="list-group-item bsec1 " style="width: 100%;" > <li style="list-style: none;text-align: right;" >تعديل المحتوي</li></a>
                    <a href="{{route('order')}}" class="list-group-item bsec1" style="width: 100%;" > <li style="list-style: none;text-align: right;" >الحجوزات</li></a>
                    <a href="#" class="list-group-item bsec1" style="width: 100%;" > <li style="list-style: none;text-align: right;" >حذف المستخدم</li></a>
                    <a href="#" class="list-group-item bsec1" style="width: 100%;" > <li style="list-style: none;text-align: right;" >إنشاء المشرف</li></a>
                  </ul>
            </div>
            @endauth
        </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
