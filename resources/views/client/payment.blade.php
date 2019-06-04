@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="valign-wrapper row register-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('client/payment/confirm_order') }}">
      @csrf
      <div class="card-content">
        <span class="card-title">Completa Ordine</span>
        <div class="row">
          <div class="input-field col s12">
            <div  class="col s4">
              <label class="radio-inline">
                <input name="group1" type="radio" checked />
                <span><i class=" fab fa-cc-mastercard fa-2x"></i></span> 
              </label>
            </div>
            <div  class="col s4">
              <label class="radio-inline">
                <input name="group1" type="radio" />
                <span><i class="fab fa-cc-visa fa-2x"></i></span>
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="client_name">Intestatario</label>
            <input type="text" class="validate" name="client_name" id="client_name" value=""/>
            @error('client_name')
            <span>{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <label for="card_number">Numero carta</label>
            <input type="text" class="validate" name="card_number" id="card_number" value=""/>
            @error('card_number')
            <span>{{ $message }}</span>
            @enderror
          </div>
          <div class="input-field col s6">
            <input name="cvv" id="cvv" type="text" class="validate" >
            <label for="cvv">CVV</label>
            @error('cvv')
            <span>{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <div class="input-field col s6">
              <input name="expiration_month" id="expiration_month" type="number" class="validate" value="">
              <label for="expiration_month">Mese scadenza</label>
              @error('expiration_month')
              <span>{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div class="input-field col s6">
            <input name="expiration_year" id="expiration_year" type="number" class="validate" value="">
            <label for="expiration_year">Anno scadenza</label>
            @error('expiration_year')
            <span>{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="row">
          <div class="col s12 right-align">
            <h5>Totale: {{ Cart::getTotal() }}&euro;</h5>
          </div>
        </div>
      </div>
      <input type="hidden" id="date" name="date" value="">
      <input type="hidden" id="time" name="time" value="">
      <div class="row card-action">
        <div class="left-align col s6">
          <a href="{{ url('client/cart') }}" class="btn-flat waves-effect waves-light">Indietro</a>
        </div>
        <div class="right-align col s6">
          <button type="submit" class="btn deep-orange waves-effect waves-light hoverable">Paga Ora</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var url = new URL(window.location.href)
  var m_date = url.searchParams.get('date')
  var time = url.searchParams.get('time')

  var c_date = document.getElementById('date')
  var c_time = document.getElementById('time')

  c_time.value = time
  c_date.value = m_date
});
</script>
@endsection

