@extends('layouts.app')

@section('content')


<div class="col-md-10 col-10" style="margin-top: 50px;">
            <div class="container section1" >
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">اسم المستخدم</th>
      <th scope="col">رقم الهاتف</th>
      <th scope="col">البريد الالكتروني</th>

    </tr>
  </thead>
  <tbody>
  @foreach($data as $d)

    <tr> 
      <th> {{$d->orderId}}</th>
      <td> {{$d->name}}</td>
      <td> {{$d->phone}}</td>
      <td> {{$d->email}}</td>
      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#modal'.$d->orderId}}" > المزيد</button></td>
      <td><a href="/deletemsg/{{$d->id}}" class="btn ">حذف</a></td>
<td>{{($d->comment)?'Done':'No comment yet'}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
            
            </div>
        </div>


        @foreach($data as $d)

          <div class="modal fade" data-name="{{$d->name}}" id="{{'modal'.$d->orderId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">الحجوزات</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="post" action="{{ action('adminController@updateOrderComment') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                  <h5 class="text" style="float: right;">اسم العميل</h5>
                  <p class="text" >{{$d->name}}</p>
                  <hr>
                  <h5 class="text" style="float: right;">العنوان</h5>
                  <p class="text" >{{$d->address}}</p>
                  <hr>
                  <h5 class="text" style="float: right;">رقم الهاتف</h5>
                  <p class="text" >{{$d->phone}}</p>
                  <hr>
                  <h5 class="text" style="float: right;">المطلوب</h5>
                  <br><br>
                  <h4 class="" style="float: right;color:black !important">{{$d->msg}}</h4>
                  <br><br>
                  <input type="hidden" name="id" value='{{$d->orderId}}'>
                  <hr>
                  <h5 class="text" style="float: right;">أضف تعليق</h5>
                  <br><br>
                  <textarea  class="form-control" name="comment" cols="20" rows="10" placeholder="أضف تعليق" style="width: 100%;height:100px" required>{{@$d->comment}}</textarea>
               </div>
                <div style="margin:20px">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div> 
                
                </form>
              </div>
            </div>
          </div>

        @endforeach

@endsection