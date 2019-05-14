@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
  <div class="valign-wrapper row register-box">
    <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('client-edit.update', Auth::id()) }}">
        @csrf
        @method('PATCH')
        <div class="card-content">
        	<span class="card-title">Modifica il tuo profilo</span>
          <div class="row">
            <div class="input-field col s12">
              <label for="client_name">Nome</label>
              <input type="text" class="validate" name="client_name" id="client_name" value="{{ Auth::user()->name }}"/>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label for="client_surname">Cognome</label>
              <input type="text" class="validate" name="client_surname" id="client_surname" value="{{ Auth::user()->surname }}"/>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label for="client_email">Email</label>
              <input type="email" class="validate" name="client_email" id="client_email" value="{{ Auth::user()->email }}"/>
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input name="newavatar" type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Carica avatar">
              </div>
            </div>
          </div>
        </div>
        <div class="card-action right-align">
          <input type="submit" class="btn teal lighten-1 waves-effect waves-light" value="Aggiorna">
        </div>
      </form>
    </div>
  </div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection
