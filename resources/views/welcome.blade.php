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
        <div class="slide-component">
            <div class="col s12 m4 home-rule" id="slide">
                <div class="icon-block">
                    <img src="/images/logos/First.png" alt="First-logo" width="90" height="90">
                    <h5> Accedi e seleziona il tipo di pasto </h5>
                </div>
            </div>
        </div>
         <div class="slide-component">
        <div class="col s12 m4 home-rule" id="slide">
          <div class="icon-block">
            <img src="/images/logos/Second.png" alt="First-logo" width="90" height="90">
            <h5>Ordina il tuo cibo preferito</h5>
            <br>
          </div>
        </div>
        </div>
         <div class="slide-component">
        <div class="col s12 m4 home-rule" id="slide">
          <div class="icon-block">
            <img src="/images/logos/Third.png" alt="First-logo" width="90" height="90">
            <h5> Te lo porteremo in tempi record al Campus!</h5>
          </div>
        </div>
        </div>
      </div>
@endsection

@section('footer')
@include('includes.footer')
@endsection

