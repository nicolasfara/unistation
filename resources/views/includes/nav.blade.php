<nav class="teal lighten-2" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">Unistation</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      @guest
      <li><a href="{{ url('/client/login') }}">Accedi</a></li>
      <li><a href="{{ url('/client/register') }}">Registrati</a></li>
      @else
      <ul id="dropdown1" class="dropdown-content">
        <li><a  id="uno" href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li><a href="#!">three</a></li>
      </ul>
      <div class="nav-wrapper">
        <li><a onclick="document.getElementById('uno').style.display='block'" class="dropdown-trigger" id="io" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
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
  <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
  <form id="logout-form" action="{{ url('client/logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  @endguest
</ul>
