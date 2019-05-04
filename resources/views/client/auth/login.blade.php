@extends('layouts.layout')

@section('content')
<div class="valign-wrapper row login-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/client/login') }}">
      @csrf
      <div class="card-content">
        <span class="card-title">Effettua il login</span>
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
@endsection

@section('footer')
@include('includes.footer')
@endsection
