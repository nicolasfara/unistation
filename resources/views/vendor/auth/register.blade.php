@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="valign-wrapper row register-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <div class="card-content">
      <span class="card-title">Registrati come Venditore</span>
      <form class="col s12" role="form" method="POST" action="{{ url('/vendor/register') }}">
        @csrf
        <div class="row">
          <div class="input-field col s12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input name="name" id="name" type="text" required class="validate">
            <label for="name">Nome attività</label>
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="email" id="email" type="email" required class="validate" value="{{ old('email') }}">
            <label for="email">Email</label>
            @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="p_iva" id="p_iva" type="number" required class="validate" value="{{ old('p_iva') }}">
            <label for="p_iva">P.IVA</label>
            @if ($errors->has('p_iva'))
            <span class="help-block">
              <strong>{{ $errors->first('p_iva') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="password" id="password" type="password" required class="validate">
            <label for="password">Password</label>
            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="password_confirmation" id="password-confirm" type="password" required class="validate">
            <label for="password-confirm">Ripeti Password</label>
            @if ($errors->has('password_confirmation'))
            <span class="help-block">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <div class="card-action right-align">
          <label for="reset" style="display: none;">Password </label>
          <button type="reset" id="reset" class="btn-flat waves-effect">Reset</button>
          <button type="submit" class="btn deep-orange waves-effect waves-light">Registra</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


@section('footer')
@include('includes.footer')
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
  var sidenav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sidenav, {  });
});
</script>
@endsection
