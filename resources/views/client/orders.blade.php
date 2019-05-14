@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h4 class="center-align">I tuoi ordini</h4>
      <table class="table centered">
        <thead>
          <tr>
            <th>Numero ordine</th>
            <th>Prezzo totale</th>
            <th>Data</th>
            <th>Stato ordine</th>
          </tr>
        </thead>
        <tbody>
         <tr>
          <td data-label="product_order"> 012</td>
          <td data-label="total"> 50,00 &euro;</td>
          <td data-label="date"> 01/01/1970</td>
          <td data-label="order_state">Evaso</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection

