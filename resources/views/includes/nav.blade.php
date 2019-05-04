<!-- Dropdown Structure -->
<!--ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul-->
<nav class="teal lighten-2" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="{{ url('/') }}" class="brand-logo">Unistation</a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      @guest
      <li><a href="{{ url('/client/login') }}">Accedi</a></li>
      <li><a href="{{ url('/client/register') }}">Registrati</a></li>
      @else
      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @endguest
    </ul>
  <!--  <ul id="nav-mobile" class="side-nav">
      <li><a href="{{ url('cards') }}">Cards</a></li>
      <li><a href="#!">Link 2</a></li>
      <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Dropdown</a>
          <div class="collapsible-body">
            <ul class="grey lighten-3">
              <li><a href="#!">One</a></li>
              <li><a href="#!">Two</a></li>
              <li class="divider"></li>
              <li><a href="#!">Three</a></li>
            </ul>
          </div>
        </li>
      </ul>
      </li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>-->
</nav>

<ul class="sidenav" id="mobile-demo">
  @guest
  <li><a href="{{ url('client/login') }}">Accedi</a></li>
  <li><a href="{{ url('client/register') }}">Registrati</a></li>
  @else
  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  @endguest
</ul>
