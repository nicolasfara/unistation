@extends('layouts.layout')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in as Client!
                    @auth
                    {{ Auth::user()->id }}
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
