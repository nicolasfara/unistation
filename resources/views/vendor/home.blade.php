@extends('layouts.app')

@section('content')
<style>
header, main, footer {
  padding-left: 300px;
}

@media only screen and (max-width : 992px) {
  header, main, footer {
    padding-left: 0;
  }
}
</style>

<nav class="teal lighten-2" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">Unistation</a>
    <a data-target="slide-out" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
  </div>
</nav>

<ul id="slide-out" class="sidenav sidenav-fixed">
  <li>
    <div class="user-view">
      <!--div class="background">
        <img class="responsive-img" src="{{ asset('images/placeholders/imageprofile-placeholder-350x350.png') }}">
      </div-->
      @if(Auth::user()->image != null)
      <a><img class="responsive-img circle" src="{{ url(Storage::url(Auth::user()->image)) }}"></a>
      @else
      <a><img class="responsive-img circle" src="{{ url('https://s3-eu-west-1.amazonaws.com/unistation/placeholders/imageprofile-placeholder-350x350.png') }}"></a>
      @endif
      <a><span class="black-text name">{{ Auth::user()->name }}</span></a>
      <a><span class="black-text email">{{ Auth::user()->email }}</span></a>
    </div>
  </li>
  <li><div class="divider"></div></li>
  <li><a id="vendor-order-btn" class="sidenav-close waves-effect"><i class="material-icons">local_mall</i>Richieste ordini</a></li>
  <li><a id="vendor-edit-products-btn" class="sidenav-close waves-effect"><i class="material-icons">mode_edit</i>Gestisci prodotti</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Impostazioni</a></li>
  <li><a id="editprofile-btn" class="sidenav-close waves-effect"><i class="material-icons">build</i>Modifica profilo</a></li>
  <li><div class="divider"></div></li>
  <li>
    <li><a class="waves-effect" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i> {{ __('Logout') }} </a>
    <form id="logout-form" action="{{ url('vendor/logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </li>
</ul>

<div class="editprofile container" style="display: none;">
  @include('vendor.editprofile')
</div>

<div class="vendorproducts container" style="display: none;">
  @include('vendor.vendorproducts')
</div>

<div class="vendororders container">
  @include('vendor.vendororders')
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendorhome.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendor-order.js') }}"></script>
@endsection
