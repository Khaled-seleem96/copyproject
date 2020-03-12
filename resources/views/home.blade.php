@extends('layouts.app')

@section('content')
        <div class="col-md-8 col-8" style="margin-top: 50px;">
            <div class="container section1" >
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>

@endsection
