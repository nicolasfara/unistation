@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="valign-wrapper row register-box">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="">
      <div class="card-content">
        <span class="card-title">Completa Ordine</span>
        <div class="row">
          <div class="input-field col s12">

            <form action="#">
              <p>
                <label>
                  <input name="group1" type="radio" checked />
                  <span>Mastercard</span>
                </label>
              </p>
              <p>
                <label>
                  <input name="group1" type="radio" />
                  <span>Visa</span>
                </label>
              </p>
              <p>
                <label>
                  <input class="with-gap" name="group1" type="radio"  />
                  <span>PayPal</span>
                </label>
              </p>
            </form>

          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="number_card">Numero carta</label>
            <input type="text" class="validate" name="number_card" id="number_card" value=""/>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="client_name">Intestatario</label>
            <input type="text" class="validate" name="client_name" id="client_name" value=""/>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
            <div class="input-field col s6">
              <input name="qty" id="new_quantity" type="number" step="1" min="1" max="12" class="validate" value="">
              <label for="qty">Mese scadenza</label>
            </div>
          </div>
               <div class="input-field col s6">
              <input name="qty" id="new_quantity" type="number" step="1" min="2019" max="2025" class="validate" value="">
              <label for="qty">Anno scadenza</label>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">
              <h5>Totale : 7 euro</h5>
            </div>
          </div>


        </div>

        <div class="card-action right-align">
          <input type="submit" class="btn teal lighten-1 waves-effect waves-light" value="Paga ora">
        </div>
      </form>
    </div>
  </div>
  @endsection
  @section('scripts')
  <script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
  @endsection

