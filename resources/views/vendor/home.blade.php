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

<nav class="deep-orange" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/vendor/home') }}" class="brand-logo">{{ config('app.name') }}</a>
    <a data-target="slide-out" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
  </div>
</nav>

<ul id="slide-out" class="sidenav sidenav-fixed">
  <li>
    <div class="user-view">
      <a><img class="responsive-img circle" src="{{ url(Storage::url(Auth::user()->image)) }}"></a>
      <a><span class="black-text name">{{ Auth::user()->name }}</span></a>
      <a><span class="black-text email">{{ Auth::user()->email }}</span></a>
    </div>
  </li>
  <li><div class="divider"></div></li>
  <li>
    <a id="vendor-order-btn" class="sidenav-close waves-effect">
      <i class="material-icons">local_mall</i>Richieste ordini
      @if($new_order_count > 0)
      <span id="new-badge" class="badge new"></span>
      @endif
    </a>
  </li>
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
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>
<script type="text/javascript" src="{{ asset('js/vendorhome.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/vendor-order.js') }}"></script>
<script type="text/javascript">
Pusher.logToConsole = true;

var pusher = new Pusher('4a06878a7e2abf7e04df', {
  cluster: 'eu',
  forceTLS: true
});

var channel = pusher.subscribe('unistation-development');
channel.bind('App\\Events\\OrderMade', data => {
  console.log(data.message)
  var vendor = JSON.parse(data.message)
  if (vendor.vendors.includes({{ Auth::id() }})) {
    location.href = '{{ url('vendor/home') }}' + '?new_item=true';
  }
});

function delivered(order_id) {
  console.log('Delivered')
  var req = new HttpClient()
  req.get("{{ url('vendor/order-delivered') }}?order_id=" + order_id, function(response) {
    //var badge = document.getElementById('badge-' + order_id)
    //if (badge != null)
    //  badge.parentNode.removeChild(badge)
    //M.toast({html: 'Ordine spedito!'})
    location.reload()
    console.log("refresh")
  })
}
</script>
@endsection
