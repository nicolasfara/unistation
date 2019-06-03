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
          <div class="row center">
                <span class="card-title">Modifica il tuo profilo</span>
          </div>
          <div class="row center">
              <img src="{{ Storage::url(Auth::user()->image) }}" alt="" class="circle responsive-img" style="max-width: 40%; max-height: 40%">
           
            
          </div>
        
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
              <div class="btn deep-orange">
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
          <button type="submit" class="btn deep-orange waves-effect waves-light">Aggiorna</button>
        </div>
      </form>
    </div>
  </div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection
