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
    <section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
	<div class="container">
		<div class="row">

			<div class="col s3 stats">
				<i class="fa fa-code" aria-hidden="true"></i>
				<div class="counting" data-count="90">0</div>
				<h5>Lines of code</h5>
			</div>

			<div class="col s3  stats">
				<i class="fa fa-check" aria-hidden="true"></i>
				<div class="counting" data-count="280">0</div>
				<h5>Projects done</h5>
			</div>

			<div class="col s3  stats">
				<i class="fa fa-user" aria-hidden="true"></i>
				<div class="counting" data-count="75">0</div>
				<h5>Happy clients</h5>
			</div>

			<div class="ccol s3  stats">
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<div class="counting" data-count="999">0</div>
				<h5>Cups of coffee</h5>
			</div>

		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

</section>

<!-- end cont stats -->
	<div class="parallax-container center valign-wrapper" style = "height: 400px;">
	  <!-- <div class="container">
		<img class="responsive-img" src="{{ asset('images/logo.png') }}" style = "display: block; margin-left: auto; margin-right: auto;">
		<div class="row center">
		  <h4 class="header col s12 light"> Il food a portata di un click</h4>
		</div>
	  </div>-->
	  <div class="parallax">
	    <img src="https://images.unsplash.com/photo-1429081172764-c0ee67ab9afd?dpr=1&auto=format&fit=crop&w=1500&h=927&q=80&cs=tinysrgb&crop=">
	  </div>
	  <!-- start count stats -->





    </div>
</div>
@endsection

@section('footer')
@include('includes.footer')
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection
