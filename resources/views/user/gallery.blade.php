@extends('user.layouts.app')
@section('title','Gallery')
@section('user')

    <!-- Page Content -->
    <div class="container "  >
  <div class="row" style="padding-top:100px; direction: rtl;display: flex; justify-content: center;">
    <div class="button-group filters-button-group" >
    <button class="btn text " style="color:white !important ;margin-bottom: 10px;" data-filter="*">الكل</button>
        @foreach($categories as $category)
        
        <button class="btn text "  style="color:white !important;    margin-bottom: 10px; " data-filter=".filter_{{$category->id}}">{{$category->category}}</button>
        @endforeach
    </div>
</div>

    <div class="grid" style="padding-top:20px; " data-isotope='{ "itemSelector": ".grid-item", "layoutMode": "fitRows" }'>
    @foreach($data as $d)
        <div class="col-lg-3 col-md-4 col-12 thumb grid-item filter_{{$d->category_id}}" >
        <a href="{{asset($d->img)}}" class="fancybox ui" rel="ligthbox" >
            <img  src="{{asset($d->img)}}" class="zoom img-fluid "  alt="">
        </a>
        </div>
    @endforeach
    </div>   
    <br>
    <h3 class="text" style="text-align:center">مقاطع الفيديو</h2>
        <br>
        <div class="row" style="padding-bottom:40px">
        @foreach($video as $v)
            <iframe class="col-lg-4  col-md-4 col-12"  height="300px" 
        src="https://www.youtube-nocookie.com/embed/{{$v->name}}" allowfullscreen frameborder="0" >
        </iframe>
        @endforeach
        </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection