@extends('layouts.layout')

@section('content')
 <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Unistation</h1>
      <div class="row center">
        <h5 class="header col s12 light"> Il food a portata di un click</h5>
      </div>
    </div>
 <div class="container">
    <div class="section">
      <div class="row">
        <div class="mySlide">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h5 class="center">Speeds up development</h5>
                    <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                </div>
            </div>
        </div>
         <div class="mySlide">
        <div class="col s12 m4">
            
          <div class="icon-block">
            <h5 class="center">User Experience Focused</h5>
            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
        </div>
         <div class="mySlide">
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Easy to work with</h5>
            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
        </div>
      </div>
@endsection

@section('footer')
@include('includes.footer')
@endsection

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
@endpush

