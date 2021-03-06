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
          <span class="card-title">Login area clienti</span>
          @endif
          @if(Request::is('vendor/*'))
          <span class="card-title">Login area venditori</span>
          @endif
          <div class="row">
            <div class="input-field col s12">
              <label for="email">Indirizzo email</label>
              <input type="email" required class="validate" name="email" id="email" />
              @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
            </div>
            <div class="input-field col s12">
              <label for="password">Password </label>
              <input type="password" required class="validate" name="password" id="password" />
              @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
              @endif
            </div>
          </div>
        </div>
        <div class="card-action right-align">
          <label for="reset" style="display: none;">Password </label>
          <button type="reset" id="reset" class="btn-flat waves-effect">Reset</button>
          <button type="submit" class="btn deep-orange waves-effect waves-light">Login</button>
        </div>
      </form>
  </div>
</div>
