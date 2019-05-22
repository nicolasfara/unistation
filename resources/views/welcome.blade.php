@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="section no-pad-bot white" id="index-banner"">
  <!-- <div class="immagine" style="height: 50%; z-index: -1; border: 2px solid red;">
	<img class="responsive-img" src="{{ asset('images/food.jpg') }}" style = "width: auto; height: 100%;">
  </div> -->
    <div class="container">
	  <div class="carousel carousel-slider center">
		<div class="carousel-fixed-item center">
		  <img class="responsive-img" src="{{ asset('images/logo.png') }}" style = "display: block; margin-left: auto; margin-right: auto;">
		  <div class="row center">
			<h4 class="header col s12 light"> Il food a portata di un click</h4>
		  </div>	
		</div>
		<div class="carousel-item deep-orange white-text" href="#one!">
		  <!-- <p class="white-text">This is your first panel</p> -->
		</div>
		<div class="carousel-item red white-text" href="#two!">
		  <!-- <p class="white-text">This is your second panel</p> -->
		</div>
		<div class="carousel-item green white-text" href="#three!"> 
		  <!-- <p class="white-text">This is your third panel</p> -->
		</div>
		<div class="carousel-item yellow white-text" href="#four!">
          <!-- <p class="white-text">This is your fourth panel</p> -->
		</div>
	  </div>
      <!-- <h1 class="header center orange-text">Unistation</h1> -->
	  
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
	  <div class="slider">
		<ul class="slides">
		  <li>
			<img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
			<div class="caption center-align">
			  <h3>This is our big Tagline!</h3>
			  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			</div>
		  </li>
		  <li>
			<img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
			<div class="caption left-align">
			  <h3>Left Aligned Caption</h3>
			  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			</div>
		  </li>
		  <li>
			<img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
			<div class="caption right-align">
			  <h3>Right Aligned Caption</h3>
			  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
			</div>
		  </li>
		  <li>
			<img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
			<div class="caption center-align">
			  <h3>This is our big Tagline!</h3>
			  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
		  </li>
		</ul>
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
