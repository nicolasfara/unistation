@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="no-pad-bot" id="index-banner">
  <div class="container section">
    <img class="responsive-img" src="{{ asset('images/logo.png') }}" style = "display: block; margin-left: auto; margin-right: auto;">
    <div class="row center">
      <h4 class="header col s12 light"> Il food a portata di un click</h4>
    </div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m6 l4 center-align">
          <div class="card z-depth-0">
            <div class="card-image">
              <i class="material-icons deep-orange-text text-lighten-1" style="font-size: 130px;">edit</i>
              <!--img src="{{ asset('images/logos/First.png') }}" class="responsive-img" alt="first-logo"-->
            </div>
            <div class="card-content">
              <h4 class = "light">Registrati</h4>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 center-align">
          <div class="card z-depth-0">
            <div class="card-image">
              <div class= "left" style="margin-left: -15%; margin-top: 35%;">
                <i class="material-icons" style="font-size: 50px;">navigate_next</i>
              </div>
              <div>
                <i class="material-icons deep-orange-text text-lighten-1" style="font-size: 130px;">assignment</i>
              </div>
              <!--img src="{{ asset('images/logos/First.png') }}" class="responsive-img" alt="first-logo"-->
            </div>
            <div class="card-content">
              <h4 class = "light">Ordina</h4>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4 center-align">
          <div class="card z-depth-0">
            <div class="card-image ">
              <div class= "left" style="margin-left: -15%; margin-top: 35%;">
                <i class="material-icons" style="font-size: 50px;">navigate_next</i>
              </div>
              <div>
                <i class="material-icons deep-orange-text text-lighten-1" style="font-size: 130px;">free_breakfast</i>
              </div>
              <!--img src="{{ asset('images/logos/Third.png') }}" class="responsive-img" alt="third-logo"-->
            </div>
            <div class="card-content">
              <h4 class = "light">Enjoy!</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax">
      <img src="https://images.unsplash.com/photo-1429081172764-c0ee67ab9afd?dpr=1&auto=format&fit=crop&w=1500&h=927&q=80&cs=tinysrgb&crop=">
    </div>
  </div>
  <div class="section white">
    <div class="row container">
      <section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
        <div class="container">
          <div class="row">
            <div class="col s3 stats">
              <div class="row"><i class="fas fa-hamburger fa-3x orange-text" aria-hidden="true"></i></div>
              <div class="counting row" data-count="{{ $products_count }}">0</div>
              <h5>Prodotti disponibili</h5>
            </div>

            <div class="col s3 stats">
              <div class="row"><i class="fas fa-store fa-3x orange-text" aria-hidden="true"></i></div>
              <div class="counting row" data-count="{{ $vendors_count }}">0</div>
              <h5>Venditori registrati</h5>
            </div>

            <div class="col s3 stats">
              <div class="row"><i class="fas fa-user fa-3x orange-text" aria-hidden="true"></i></div>
              <div class="counting row" data-count="{{ $clients_count }}">0</div>
              <h5>Clieni soddisfatti</h5>
            </div>

            <div class="col s3 stats">
              <div class="row"><i class="fas fa-shipping-fast fa-3x orange-text" aria-hidden="true"></i></div>
              <div class="counting row" data-count="{{ $orders_count }}">0</div>
              <h5>Ordini effettuati</h5>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax">
      <img src="https://images.unsplash.com/photo-1429081172764-c0ee67ab9afd?dpr=1&auto=format&fit=crop&w=1500&h=927&q=80&cs=tinysrgb&crop=">
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

{{-- vim: set ft=html : --}}
