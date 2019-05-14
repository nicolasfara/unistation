<nav class="teal lighten-2" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">Unistation</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      @guest
      <li><a href="{{ url('client/login') }}">Accedi</a></li>
      <li><a href="{{ url('client/register') }}">Registrati</a></li>
      @else
      <ul id="user-dropdown" class="dropdown-content">
        <li><a href="{{ url('client/clientorders') }}"><i class="material-icons">shop</i>Ordini</a></li>
        <li><a href="{{ url('client/settings') }}"><i class="material-icons">settings</i>Gestisci profilo</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>{{ __('Logout') }}</a></li>
      </ul>
      <div class="nav-wrapper">
        <li><a class="dropdown-trigger" href="#!" data-target="user-dropdown">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="#!"><i class="material-icons right">shopping_cart</i></a></li>

        <form id="logout-form" action="{{ url('client/logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
    </div>
      @endguest
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  @guest
  <li><a href="{{ url('client/login') }}">Accedi</a></li>
  <li><a href="{{ url('client/register') }}">Registrati</a></li>
  @else
  <li><a href="#!"><i class="material-icons">shopping_cart</i>Carrello</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a href="#!"><i class="material-icons">shop</i>Ordini</a></li>
  <li><a href="{{ url('client/settings') }}"><i class="material-icons">settings</i>Gestisci profilo</a></li>
  <li class="divider" tabindex="-1"></li>
  <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>{{ __('Logout') }}</a>
  @endguest
</ul>
