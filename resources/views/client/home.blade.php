@extends('layouts.layout')

@section('nav')
@include('includes.nav')
@endsection

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <div class="row">
      <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
        <li class="tab"><a href="#pizza">Pizza</a></li>
        <li class="tab"><a href="#hamburger">Hamburger</a></li>
        <li class="tab"><a href="#primi">Primi e minestre</a></li>
        <li class="tab"><a href="#secondi">Secondi</a></li>
        <li class="tab"><a href="#dolci">Dolci</a></li>
      </ul>
      <div class="section no-pad-bot" id="index-banner">
        <div id="pizza" class="col s12">
          <div class="row">
            @for($i = 0; $i < 10; $i++)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img class="responsive-img" src="{{ asset('images/placeholders/image-placeholder-350x350.png') }}">
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                  <span class="card-title">Card Title</span>
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
            @endfor
          </div>
        </div>
        <div id="hamburger" class="col s12">
          <p>Test 2</p>
        </div>
        <div id="primi" class="col s12">
          <p>Test 3</p>
        </div>
        <div id="secondi" class="col s12">
          <p>Test 4</p>
        </div>
        <div id="dolci" class="col s12">
          <p>Test 5</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection
