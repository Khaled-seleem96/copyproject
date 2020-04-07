@extends('layouts.app')

@section('content')


<div class="col-md-10 col-10" style="margin-top: 50px;">
            <div class="container section1" >
            <form action="{{route('insert')}}" method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
            <input type="file" name="img">
            @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
                                <br><br>
            <input type="text" name="title" placeholder="عنوان" require>
            @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong class="text">{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
            <br><br>
            <input type="submit" class="btn text" style="color:white !important" value="اصف">
            </form> 
            </div>
        </div>


@endsection