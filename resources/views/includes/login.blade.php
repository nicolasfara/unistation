<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    @if(Request::is('client/*'))
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/client/login') }}">
    @endif
    @if(Request::is('vendor/*'))
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/vendor/login') }}">
    @endif
      @csrf
      <div class="card-content">
        @if(Request::is('client/*'))
        <span class="card-title">Effettua il login Cliente</span>
        @endif
        @if(Request::is('vendor/*'))
        <span class="card-title">Effettua il login Venditore</span>
        @endif
        <div class="row">
          <div class="input-field col s12">
            <label for="email">Indirizzo email</label>
            <input type="email" class="validate" name="email" id="email" />
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
          <div class="input-field col s12">
            <label for="password">Password </label>
            <input type="password" class="validate" name="password" id="password" />
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>
      </div>
      <div class="card-action right-align">
        <input type="reset" id="reset" class="btn-flat grey-text waves-effect">
        <input type="submit" class="btn teal lighten-1 waves-effect waves-light" value="Login">
      </div>
    </form>
  </div>
</div>
