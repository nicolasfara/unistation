@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="no-pad-bot" id="index-banner">
    <div class="container section">
        <div class="row ">
            <div class="logo col s12 m6">
                <img class="responsive-img" src="{{ asset('images/logo.png') }}" style="display: block; margin-left: auto; margin-right: auto;">
                <div class="row center title-home">
                    <h4 class="header col s12 light"> Il food a portata di un click</h4>
                </div>
            </div>
            <div class="center col s12 m6">
            	<video id="video_player" class="responsive-video" poster="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/images/header_animation_poster-4f02cb7cad.png" playsinline autoplay loop muted width="300" height="300">
            		<source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-1a60210550.webm" type="video/webm">
                        <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-c22df1758f.mp4" type="video/mp4">
                            <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-1a60210550.webm" type="video/webm">
                             <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-c22df1758f.mp4" type="video/mp4">
                                 <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-c22df1758f.mp4" type="video/mp4">
                                 </video>
                             </div>
                         </div>
                     </div>
   <!-- <div class="container">
        <div class="section">
            <div class="row" id="home-card">
                <div class="col s4 m4 l4 center-align">
                    <div class="card z-depth-0">
                        <span class="fa-stack fa-lg row">
							<i class="far fa-circle fa-stack-2x"></i>
							<i class="fab fa-stack-1x">1</i>
						</span>
                        <div class="card-image">
                            <i class="material-icons deep-orange-text text-lighten-1">edit</i>
                        </div>
                        <div class="card-content center">
                            <h4 class="light flow-text">Registrati</h4>
                        </div>
                    </div>
                </div>
                <div class="col s4 m4 l4 center-align">
                    <div class="card z-depth-0">
                        <span class="fa-stack fa-lg row">
							<i class="far fa-circle fa-stack-2x"></i>
							<i class="fab fa-stack-1x">2</i>
						</span>
                        <div class="card-image">
                            <i class="material-icons deep-orange-text text-lighten-1">assignment</i>
                        </div>
                        <div class="card-content center">
                            <h4 class="light">Ordina</h4>
                        </div>
                    </div>
                </div>
                <div class="col s4 m4 l4 center-align">
                    <div class="card z-depth-0">
                        <span class="fa-stack fa-lg row">
						 	<i class="far fa-circle fa-stack-2x"></i>
							<i class="fab fa-stack-1x">3</i>
							</span>
                        <div class="card-image ">
                            <i class="material-icons deep-orange-text text-lighten-1">free_breakfast</i>
                        </div>
                        <div class="card-content">
                            <h4 class="light">Enjoy!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
<div class="parallax-container">
    <div class="parallax">
        <img src="{{ asset('images/Food.jpg') }}">
    </div>
</div>
	<!-- <div id = "carouselpc" class = "row" style = "margin-bottom: 0px; height: auto; width: auto;">
		<div class="center aligned col s3">
			<div class="normalText" style="padding: 60px 30px; position: relative;">
				<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
					<div class="center aligned middle aligned column no-padding">1</div>
				</div>
				<img class="ui inline image" src="{{ asset('images/how_to_2.png') }}" style="max-width: 128px; height: auto;">
				<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">Registrati e accedi come utente Unistation</p>
			</div>
		</div>
		<div class="center aligned col s3" style="border-right: 1px solid rgb(219, 219, 219); border-left: 1px solid rgb(219, 219, 219);">
			<div class="normalText" style="padding: 60px 30px; position: relative;">
				<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
					<div class="center aligned middle aligned column no-padding">2</div>
				</div>
				<img class="ui inline image" src="{{ asset('images/how_to_4.png') }}" style="max-width: 128px; height: auto;">
				<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">Seleziona le varie portate e completa l'ordine indicando l'ora di consegna</p>
			</div>
		</div>
		<div class="center aligned col s3">
			<div class="normalText" style="padding: 60px 30px; position: relative;">
				<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
					<div class="center aligned middle aligned column no-padding">3</div>
				</div>
				<img class="ui inline image" src="{{ asset('images/how_to_3.png') }}" style="max-width: 128px; height: auto;">
				<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">Concludi l'ordine e attendi la notifica per email della tua freccia</p>
			</div>
		</div>
		<div class="center aligned col s3" style="border-left: 1px solid rgb(219, 219, 219); height: 100%;">
			<div class="normalText" style="padding: 60px 30px; position: relative;">
				<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
					<div class="center aligned middle aligned column no-padding">4</div>
				</div>
				<img class="ui inline image" src="{{ asset('images/how_to_1.png') }}" style="max-width: 128px; height: auto;">
				<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">La freccia consegnerà l'ordine nella fascia oraria stabilita</p>
			</div>
		</div>
	</div>
	<div id = "carouselmobile" class = "row">
		<div class="center aligned col s12">
			<div class="carousel carousel-slider">
				<a class="carousel-item" href="#one!">
					<div class="normalText" style="padding: 60px 30px; position: relative;">
						<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
							<div class="center aligned middle aligned column no-padding">1</div>
						</div>
						<img class="ui inline image" src="{{ asset('images/how_to_2.png') }}" style="max-width: 128px; height: auto;">
						<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">Registrati e accedi come utente Unistation</p>
					</div>
				</a>
				<a class="carousel-item" href="#two!">
					<div class="normalText" style="padding: 60px 30px; position: relative;">
						<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
							<div class="center aligned middle aligned column no-padding">2</div>
						</div>
						<img class="ui inline image" src="{{ asset('images/how_to_4.png') }}" style="max-width: 128px; height: auto;">
						<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">Seleziona le varie portate e completa l'ordine indicando l'ora di consegna</p>
					</div>
				</a>
				<a class="carousel-item" href="#three!">
					<div class="normalText" style="padding: 60px 30px; position: relative;">
						<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
							<div class="center aligned middle aligned column no-padding">3</div>
						</div>
						<img class="ui inline image" src="{{ asset('images/how_to_3.png') }}" style="max-width: 128px; height: auto;">
						<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">Concludi l'ordine e attendi la notifica per email della tua freccia</p>
					</div>
				</a>
				<a class="carousel-item" href="#four!">
					<div class="normalText" style="padding: 60px 30px; position: relative;">
						<div class="ui centered middle aligned one column grid flat_grid" style="background-color: black; color: white; width: 2em; height: 2em; border-radius: 1em; position: absolute; left: 25px; top: 25px;">
							<div class="center aligned middle aligned column no-padding">4</div>
						</div>
						<img class="ui inline image" src="{{ asset('images/how_to_1.png') }}" style="max-width: 128px; height: auto;">
						<p style="color: rgb(50, 50, 50); font-size: 15px; font-weight: 300; margin-top: 40px;">La freccia consegnerà l'ordine nella fascia oraria stabilita</p>
					</div>
				</a>
			</div>
		</div>
	</div> -->
    <div class="section">
        <div class="row center valign-wrapper">
            <div class="col s2">

                    <a href="Previo" class="movePrevCarousel">
                        <i class="large material-icons middle-indicator-text deep-orange-text left">chevron_left</i>
                    </a>
               
            </div>
            <div class="col s8">
             <div class="slider center">
                <ul class="slides">
                    <li>
                        <span class="step ui">1</span>
                        <img class="ui inline image" src="{{ asset('images/how_to_2.png') }}" style="max-width: 128px; height: auto; margin-top: 70px;">
                        <p style="color: rgb(50, 50, 50);   margin-top: 20px;margin-left:5px;margin-right:5px;">Registrati e accedi come utente Unistation</p>
                    </li>
                    <li>
                        <span class="step ui">2</span>
                        <img class="ui inline image" src="{{ asset('images/how_to_4.png') }}" style="max-width: 128px; height: auto;margin-top: 70px;">
                        <p style="color: rgb(50, 50, 50); margin-top: 20px;margin-left:5px;margin-right:5px;">Seleziona le varie portate e completa l'ordine indicando l'ora di consegna</p>
                    </li>
                    <li>
                        <span class="step ui">3</span>
                        <img class="ui inline image" src="{{ asset('images/how_to_3.png') }}" style="max-width: 128px; height: auto;margin-top: 70px;">
                        <p style="color: rgb(50, 50, 50); margin-top: 20px;margin-left:5px;margin-right:5px;">Concludi l'ordine e attendi la notifica per email della tua freccia</p>
                    </li>
                    <li>
                        <span class="step ui">4</span>
                        <img class="ui inline image" src="{{ asset('images/how_to_1.png') }}" style="max-width: 128px; height: auto;margin-top: 70px;">
                        <p style="color: rgb(50, 50, 50);  margin-top: 20px margin-left:5px;margin-right:5px;">La freccia consegnerà l'ordine nella fascia oraria stabilita</p>
                    </li>
                </ul> 
            </div>
        </div> 
        <div class="col s2">

                <a href="Siguiente"  class=" moveNextCarousel right ">
                    <i class="large material-icons middle-indicator-text deep-orange-text right">chevron_right</i>
                </a>
           

        </div>
    </div>
</div>
<div class="parallax-container">
    <div class="parallax">
        <img src="{{ asset('images/food3.jpg') }}">
    </div>
</div>
<div class="section white">
    <div class="row container center">
        <h3>I nostri risultati</h3>
    </div>
    <div class="row container">
        <section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
            <!-- <div class="container"> -->
                <div class="row">
                    <div class="col s3 stats">
                        <div class="row"><i class="fas fa-hamburger deep-orange-text" aria-hidden="true"></i></div>
                        <div class="counting row" data-count="{{ $products_count }}">0</div>
                        <h5>Prodotti disponibili</h5>
                    </div>

                    <div class="col s3 stats">
                        <div class="row"><i class="fas fa-store deep-orange-text" aria-hidden="true"></i></div>
                        <div class="counting row" data-count="{{ $vendors_count }}">0</div>
                        <h5>Venditori registrati</h5>
                    </div>

                    <div class="col s3 stats">
                        <div class="row"><i class="fas fa-user deep-orange-text" aria-hidden="true"></i></div>
                        <div class="counting row" data-count="{{ $clients_count }}">0</div>
                        <h5>Clienti soddisfatti</h5>
                    </div>

                    <div class="col s3 stats">
                        <div class="row"><i class="fas fa-shipping-fast deep-orange-text" aria-hidden="true"></i></div>
                        <div class="counting row" data-count="{{ $orders_count }}">0</div>
                        <h5>Ordini effettuati</h5>
                    </div>
                </div>
                <!-- </div> -->
            </section>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/food2.jpg') }}">
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

