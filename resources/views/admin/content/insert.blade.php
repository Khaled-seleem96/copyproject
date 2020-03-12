@extends('layouts.app')

@section('content')


<div class="col-md-8 col-8" style="margin-top: 50px;">
            <div class="container section1" >
            <form action="{{route('insert')}}" method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
            <input type="file" name="img">
            <input type="text" name="title">
            </form>
            </div>
        </div>


@endsection