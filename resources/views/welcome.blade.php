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
        <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <img src="/images/logos/First.png" alt="First-logo" width="80" height="80">
                    </div>
                    <div class="card-content">
                        <p> Accedi e seleziona il tipo di pasto </p>
                        <br>
                    </div>
            </div>
        </div>
        <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <img src="/images/logos/Second.png" alt="Second-logo" width="80" height="80">
                    </div>
                    <div class="card-content">
                        <p> Ordina il tuo cibo preferito </p>
                        <br>
                    </div>
            </div>
        </div>
        <div class="col s4">
            <div class="card">
                <div class="card-image">
                    <img src="/images/logos/Third.png" alt="Thirs-logo" width="80" height="80">
                    </div>
                    <div class="card-content">
                        <p> Te lo porteremo in tempi record al Campus!</p>
                    </div>
            </div>
        </div>
      </div>
@endsection

@section('footer')
@include('includes.footer')
@endsection

