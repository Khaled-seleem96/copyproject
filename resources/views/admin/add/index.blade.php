@extends('layouts.app')
@section('content')
<div class="col-md-10 col-10" style="margin-top: 50px;">
<div class="container section1" >
<table class="table table-dark">
<thead><tr><th scope="col">الاسم</th>
<th scope="col"> البريد الالكتروني</th>
<th scope="col">رقم الهاتف</th>
<th scope="col">حذف المستخدم</th>
</tr>
  </thead>
  <tbody>
  @foreach($data as $d)
    <tr>
      <th scope="row">{{$d->name}}</th>
      <td>{{$d->email}}</td>
      <td>{{$d->phone}}</td>
      <td><a href="/deleteuser/{{$d->id}}" class="btn ">حذف</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
        </div>
        </div>
@endsection