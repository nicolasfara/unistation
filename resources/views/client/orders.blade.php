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
          <div class="row">
            <div class="card">
             <div class="card-content" >
              <table>
                <thead>
                 <h5 class="center">I tuoi ordini</h5>
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
  </div>
</div>
</div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection

