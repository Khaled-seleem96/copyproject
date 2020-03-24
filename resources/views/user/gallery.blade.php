@extends('user.layouts.app')
@section('title','Gallery')
@section('user')


    <!-- Page Content -->
    <div class="container "  >



<div class="row "  style="padding-top:100px">

@foreach($data as $d)
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
        <a href="{{asset($d->img)}}" class="fancybox" rel="ligthbox">
            <img  src="{{asset($d->img)}}" class="zoom img-fluid "  alt="">
           
        </a>
    </div>
    @endforeach
  
    
   
   
</div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




@endsection