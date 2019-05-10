@extends('layouts.layout')

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

<ul id="slide-out" class="sidenav sidenav-fixed">
  <li>
    <div class="user-view">
      <div class="background">
        <img src="{{ asset('images/placeholders/imageprofile-placeholder-350x350.png') }}">
      </div>
      <a><img class="circle" src="{{ asset('images/placeholders/imageprofile-placeholder-350x350.png') }}"></a>
      <a><span class="white-text name">{{ Auth::user()->name }}</span></a>
      <a><span class="white-text email">{{ Auth::user()->email }}</span></a>
    </div>
  </li>
  <li><a id="vendor-order-btn" class="sidenav-close"><i class="material-icons">local_mall</i>Richieste ordini</a></li>
  <li><a id="vendor-edit-products-btn" class="sidenav-close"><i class="material-icons">mode_edit</i>Gestisci prodotti</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Impostazioni</a></li>
  <li><a id="editprofile-btn" class="sidenav-clone waves-effect"><i class="material-icons">build</i>Modifica profilo</a></li>
  <li><a class="subheader"></a></li>
  <li>
    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

<div class="editprofile container" style="display: none;">
  @include('vendor.editprofile')
</div>

<div class="vendorproducts container" style="display: none;">
  @include('vendor.vendorproducts')
</div>

<div class="vendororders container">
  @include('vendor.vendororders')
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, {  });
});
</script>
@endsection
