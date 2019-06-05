@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="no-pad-bot" id="index-banner">
    <div class="container section">
        <div class="row ">
            <div class="logo col s12 m6">
                <img class="responsive-img" src="{{ asset('images/logo.png') }}"  alt = "Logo UniStation" style="display: block; margin-left: auto; margin-right: auto;">
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

	<div class="parallax-container">
		<div class="parallax">
			<img src="{{ asset('images/Food.jpg') }}" alt = "Tagliere con ciotole di insalata e una bevanda alla fragola">
		</div>
	</div>
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
                        <img class="ui inline image" src="{{ asset('images/how_to_2.png') }}" style="max-width: 128px; height: auto; margin-top: 70px;" alt = "Rubrica di contatti">
                        <p style="color: rgb(50, 50, 50);   margin-top: 20px;margin-left:5px;margin-right:5px;">Registrati e accedi come utente Unistation</p>
                    </li>
                    <li>
                        <span class="step ui">2</span>
                        <img class="ui inline image" src="{{ asset('images/how_to_4.png') }}" style="max-width: 128px; height: auto;margin-top: 70px;" alt = "Cloche con timer">
                        <p style="color: rgb(50, 50, 50); margin-top: 20px;margin-left:5px;margin-right:5px;">Seleziona le varie portate e completa l'ordine indicando l'ora di consegna</p>
                    </li>
                    <li>
                        <span class="step ui">3</span>
                        <img class="ui inline image" src="{{ asset('images/how_to_3.png') }}" style="max-width: 128px; height: auto;margin-top: 70px;" alt = "Motorino">
                        <p style="color: rgb(50, 50, 50); margin-top: 20px;margin-left:5px;margin-right:5px;">Concludi l'ordine e attendi la notifica per email della tua freccia</p>
                    </li>
                    <li>
                        <span class="step ui">4</span>
                        <img class="ui inline image" src="{{ asset('images/how_to_1.png') }}" style="max-width: 128px; height: auto;margin-top: 70px;" alt = "Mappa con bussola">
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
        <img src="{{ asset('images/food3.jpg') }}" alt = "Tegame con pasta fredda condita con salvia, broccoli e pomodorini">
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
            <img src="{{ asset('images/food2.jpg') }}" alt = "Salmone crudo circondato da frutta secca e legumi">
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

