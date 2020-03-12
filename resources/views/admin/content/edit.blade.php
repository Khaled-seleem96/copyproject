@extends('layouts.app')

@section('content')


<div class="col-md-8 col-8" style="margin-top: 50px;">
            <div class="container section1" >
            <form action="{{route('update',['id'=>$d->id])}}" method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
            <img src="{{asset($d->img)}}" alt="" width='50px'>
            <input name='img' type="file" class="form-control" placeholder='Enter Post Title' value='{{$d->img}}'>
            <br><br>
            <input type="text" name="title" value='{{$d->title}}'>
            </form>
            </div>
        </div>


@endsection