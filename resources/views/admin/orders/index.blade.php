@extends('layouts.app')

@section('content')


<div class="col-md-10 col-10" style="margin-top: 50px;">
            <div class="container section1" >
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم المستخدم</th>
      <th scope="col">العنوان</th>
      <th scope="col">رقم الهاتف</th>
      <th scope="col">البريد الالكتروني</th>
      <th scope="col">المطلوب</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)

    <tr> 
      <td> {{$d->id}}</td>
      <td> {{$d->name}}</td>
      <td> {{$d->address}}</td>
      <td> {{$d->phone}}</td>
      <td> {{$d->email}}</td>
      <td ><p style="width:70px">{{$d->msg}}</p></td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{$d->id}}" data-name="{{$d->name}}">
  المزيد
</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
            
            </div>
        </div>
        <div class="modal fade" data-name="{{$d->name}}" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">الحجوزات</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>اسم العميل</p>
        <p>{{$d->name}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection