@extends('layouts.layout')

@section('nav')
@include('includes.nav')
@endsection
@section('content')
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
          <li class="tab"><a class="active" href="#Pizza">Pizza</a></li>
          <li class="tab"><a href="#Hamburger">Hamburger</a></li>
          <li class="tab"><a href="#Primi">Primi e minestre</a></li>
          <li class="tab"><a href="#Secondi">Secondi di carne e pesce</a></li>
          <li class="tab"><a href="#Dolci">Dolci</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12 m6">
        <div class="card">
          <div class="card-image">
            <!--<img src="images/sample-1.jpg">-->
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


<!-- vim:set sw=2 ts=2 sts=2 ft=html expandtab:-->
