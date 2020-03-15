@extends('layouts.app')

@section('content')


<div class="col-md-10 col-10" style="margin-top: 50px;">
            <div class="container section1" >
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الصور</th>
      <th scope="col">العنوان</th>
      
      <th scope="col">تغير الصور</th>
      <th scope="col">حذف الصور</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr>
      <th scope="row">{{$d->id}}</th>
      <td><img src="{{asset($d->img)}}" alt="this is image" width='80px'></td>
      <td>{{$d->title}}</td>
      
      <td><a href="/edit/{{$d->id}}" class="btn ">تغير</a></td>
      <td><a href="/delete/{{$d->id}}" class="btn ">حذف</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('upload')}}" class="btn ">اضافه الصور</a>
            </div>
        </div>


@endsection