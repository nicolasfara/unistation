@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <div class="row">
      <div class="section no-pad-bot" id="index-banner">
        <div id="" class="col s12">
      <h4>Completa ordine</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h5>Pagamento</h5>
    </div>
  </div>
  <form action="php/process_checkout.php" id="frmCarta" method="post">
    <div class="row">
      <div class="col-sm-12">
        <label class="radio-inline">
          <input type="radio" name="optradio"><i class="fa fa-cc-mastercard" style="font-size:35px"></i>
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio"><i class="fa fa-cc-visa" style="font-size:35px"></i>
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio"><i class="fa fa-cc-paypal" style="font-size:35px"></i>
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradio"><i class="fa fa-cc-amex" style="font-size:35px"></i>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label class="sr-only" for="numero">Numero</label>
        <input type="text" name="numero" class="form-control" id="numero" value="" placeholder="Numero carta" minlength="13" maxlength="16">
      </div>
      <div class="col-sm-6 ">
        <label class="sr-only" for="intestatario">Intestatario</label>
        <input type="text" name="intestatario" class="form-control" id="intestatario" value="" placeholder="Nome e cognome intestatario">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <p>Data di scadenza</p>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2">
        <div class="form-group">
          <label class="sr-only" for="sel1">Selezione mesi</label>
          <select id="sel1" name="sel1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          <label class="sr-only" for="sel2">Selezione</label>
          <select id="sel2" name="sel2">
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option>
            <option>2028</option>
            <option>2029</option>
            <option>2030</option>
            <option>2031</option>
            <option>2032</option>
            <option>2033</option>
            <option>2034</option>
            <option>2035</option>
          </select>
        </div>
      </div>
      <div class="col-sm-5">
        <label class="sr-only" for="cvv">CVV</label>
        <input type="text" name="cvv" id="cvv" value="" placeholder="CVV" minlength="3" maxlength="3">
      </div>
      <div class="col-sm-1">
        <h6>Totale: </h6>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 text-right">
        <button type="submit" class="btn ">Paga ora</button>
      </div>
    </div>
  </form>

</div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection

