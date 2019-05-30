@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="no-pad-bot" id="index-banner">
    <div class="container section">
        <div class="row">
            <div class="logo">
                <img class="responsive-img" src="{{ asset('images/logo.png') }}" style="display: block; margin-left: auto; margin-right: auto;">
                <div class="row center">
                    <h4 class="header col s12 light"> Il food a portata di un click</h4>
                </div>
            </div>
            <div class="center">
                <video poster="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/images/header_animation_poster-4f02cb7cad.png" autoplay="" loop="" width="300" height="300">
                    <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-1a60210550.webm" type="video/webm">
                    <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-c22df1758f.mp4" type="video/mp4">
                </video>
                <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-1a60210550.webm" type="video/webm">
                <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-c22df1758f.mp4" type="video/mp4">
                <source src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats/static/videos/header_animation-c22df1758f.mp4" type="video/mp4">
            </div>
        </div>
    </div>
    <div class="container">
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
                            <!--img src="{{ asset('images/logos/First.png') }}" class="responsive-img" alt="first-logo"-->
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
                            <!--img src="{{ asset('images/logos/First.png') }}" class="responsive-img" alt="first-logo"-->
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
                            <!--img src="{{ asset('images/logos/Third.png') }}" class="responsive-img" alt="third-logo"-->
                        </div>
                        <div class="card-content">
                            <h4 class="light">Enjoy!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/Food.jpg') }}">
        </div>
    </div>
    <div class="section white">
        <div class="row container center">
            <h3>I nostri risultati</h3>
        </div>
        <div class="row container">
            <section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
                <div class="container">
                    <div class="row">
                        <div class="col s3 stats">
                            <div class="row"><i class="fas fa-hamburger orange-text" aria-hidden="true"></i></div>
                            <div class="counting row" data-count="{{ $products_count }}">0</div>
                            <h5>Prodotti disponibili</h5>
                        </div>

                        <div class="col s3 stats">
                            <div class="row"><i class="fas fa-store orange-text" aria-hidden="true"></i></div>
                            <div class="counting row" data-count="{{ $vendors_count }}">0</div>
                            <h5>Venditori registrati</h5>
                        </div>

                        <div class="col s3 stats">
                            <div class="row"><i class="fas fa-user orange-text" aria-hidden="true"></i></div>
                            <div class="counting row" data-count="{{ $clients_count }}">0</div>
                            <h5>Clienti soddisfatti</h5>
                        </div>

                        <div class="col s3 stats">
                            <div class="row"><i class="fas fa-shipping-fast orange-text" aria-hidden="true"></i></div>
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
            <img src="{{ asset('images/Food.jpg') }}">
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

