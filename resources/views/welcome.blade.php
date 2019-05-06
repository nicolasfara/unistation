@extends('layouts.layout')

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
              <img src="/images/logos/First.png" class="responsive-img" alt="First-logo">
            </div>
            <div class="card-content">
              <p> Accedi e seleziona il tipo di pasto </p>
              <br>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 center-align">
          <div class="card">
            <div class="card-image">
              <img src="/images/logos/Second.png" class="responsive-img"  alt="Second-logo" >
            </div>
              <div class="card-content">
                <p> Ordina il tuo cibo preferito </p>
                <br>
              </div>
          </div>
        </div>
        <div class="col s12 m6 l4 center-align">
          <div class="card">
            <div class="card-image">
              <!--img src="/images/logos/Third.png" class="responsive-img"  alt="Thirs-logo"-->
            </div>
            <div class="card-content">
              <p> Te lo porteremo in tempi record al Campus!</p>
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

<!-- vim:set sw=2 ts=2 sts=2 ft=html expandtab:-->
