@extends('layouts.layout')

@section('nav')
@include('includes.nav')
@endsection

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <div class="row">
    <h5>STO</h5>
     
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection
