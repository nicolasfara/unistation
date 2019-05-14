@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <h1 class="header center orange-text">Unistation</h1>
    <div class="row center">
      <h4 class="header col s12 light"> Il food a portata di un click</h4>
    </div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m6 l4 center-align">
          <div class="card">
            <div class="card-image">
              <i class="material-icons" style="font-size: 130px;">edit</i>
              <!--img src="{{ asset('images/logos/First.png') }}" class="responsive-img" alt="first-logo"-->
            </div>
            <div class="card-content">
              <h4>Registrati</h4>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 center-align">
          <div class="card">
            <div class="card-image">
              <i class="material-icons" style="font-size: 130px;">assignment</i>
              <!--img src="{{ asset('images/logos/Second.png') }}" class="responsive-img" alt="second-logo"-->
            </div>
            <div class="card-content">
              <h4>Ordina</h4>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 center-align">
          <div class="card">
            <div class="card-image ">
              <i class="material-icons" style="font-size: 130px;">free_breakfast</i>
              <!--img src="{{ asset('images/logos/Third.png') }}" class="responsive-img" alt="third-logo"-->
            </div>
            <div class="card-content">
              <h4>Enjoy!</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
@include('includes.footer')
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection


<!-- vim:set sw=2 ts=2 sts=2 ft=html expandtab:-->
