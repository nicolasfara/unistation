@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="valign-wrapper row register-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <div class="card-content">
      <span class="card-title">Registrati come Cliente</span>
      <form class="col s12" role="form" method="POST" action="{{ url('/client/register') }}">
        @csrf
        <div class="row">
          <div class="input-field col s6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input name="name" id="name" type="text" required class="validate">
            <label for="name">Nome</label>
            @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
          </div>
          <div class="input-field col s6">
            <input name="surname" id="surname" type="text" required class="validate">
            <label for="surname">Cognome</label>
            @if ($errors->has('surname'))
            <span class="help-block">
              <strong>{{ $errors->first('surname') }}</strong>
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
          <input type="reset" id="reset" class="btn-flat grey-text waves-effect">
          <button type="submit" class="btn teal lighten-1 waves-effect waves-light">Registra</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('footer')
@include('includes.footer')
@endsection


<!-- vim:set sw=2 ts=2 sts=2 ft=html expandtab:-->
