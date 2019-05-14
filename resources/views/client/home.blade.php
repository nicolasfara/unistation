@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <div class="row">
      <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
        @foreach($types as $type)
        <li class="tab"><a href="#{{ $type }}">{{ $type }}</a></li>
        @endforeach
      </ul>
      <div class="section no-pad-bot" id="index-banner">
        @foreach($types as $type)
        <div id="{{ $type }}" class="col s12">
          <div class="row">
            @foreach($products as $product)
            @if($product->type == $type)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                  <img class="responsive-img" src="{{ asset('images/placeholders/image-placeholder-350x350.png') }}">
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">send</i></a>
                </div>
                <div class="card-content">
                  <span class="card-title">{{ $product->name }}</span>
                  <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
              </div>
            </div>
            @endif
            @endforeach
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection
