@extends('layouts.app')
@section('title','Admin')
@section('content')
        <div class="col-md-10 col-8" style="margin-top: 50px;">
            <div class="container section1" >
                <h1 class="text" style="text-align:center">أهلا بكم من جديد</h1>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<br><br>
                    <h4 class="text" style="text-align:center">نحن هنا لمساعدة المستخدمين</h4>
                </div>
            </div>
        </div>

@endsection
