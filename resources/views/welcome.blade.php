@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="section no-pad-bot teal lighten-2" id="index-banner"">
  <!-- <div class="immagine" style="height: 50%; z-index: -1; border: 2px solid red;">
	<img class="responsive-img" src="{{ asset('images/food.jpg') }}" style = "width: auto; height: 100%;">
  </div> -->
    <div class="container teal lighten-2">
      <!-- <h1 class="header center orange-text">Unistation</h1> -->
	  <img class="responsive-img" src="{{ asset('images/logo.png') }}" style = "display: block; margin-left: auto; margin-right: auto;">
      <div class="row center">
        <h4 class="header col s12 light"> Il food a portata di un click</h4>
	  </div>
    </div>
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 m6 l4 center-align teal lighten-2">
            <div class="card teal lighten-2 z-depth-0">
              <div class="card-image">
                <i class="material-icons" style="font-size: 130px;">edit</i>
                <!--img src="{{ asset('images/logos/First.png') }}" class="responsive-img" alt="first-logo"-->
              </div>
              <div class="card-content">
                <h4 class = "light">Registrati</h4>
              </div>
            </div>
          </div>
		  <div class="col s12 m6 l4 center-align">
            <div class="card teal lighten-2 z-depth-0">
              <div class="card-image">
                <i class="material-icons" style="font-size: 130px;">assignment</i>
                <!--img src="{{ asset('images/logos/First.png') }}" class="responsive-img" alt="first-logo"-->
              </div>
              <div class="card-content">
                <h4 class = "light">Ordina</h4>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4 center-align">
            <div class="card teal lighten-2 z-depth-0">
              <div class="card-image ">
                <i class="material-icons" style="font-size: 130px;">free_breakfast</i>
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
</div>
@endsection

@section('footer')
@include('includes.footer')
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection
