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
                    @foreach($orders as $order)
                    <tr>
                      <td data-label="product_order">#{{ $order->id }}</td>
                      <td data-label="total">{{ $order->total }} &euro;</td>
                      <td data-label="date">{{ $order->order_created_at }}</td>
                      <td data-label="order_state">
                        @if($order->delivered == true)
                        Spedito
                        @else
                        In preaparazione
                        @endif
                      </td>
                    </tr>
                    @endforeach
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

