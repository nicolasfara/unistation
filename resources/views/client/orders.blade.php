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
                  	<tr> <td><a href="{{ url('client/home') }}" class="btn-flat waves-effect ">Indietro</a></td></tr>
                  	<tr>
                  		      
                    <h5 class="center">I tuoi ordini</h5>
             
                    </tr>
                    <tr>
                      <th>Numero ordine</th>
                      <th>Data</th>
                      <th>Prezzo totale</th>
                      <th>Stato ordine</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $order)
                    <tr>
                      @php
                        $date = Carbon::parse($order->created_at);
                      @endphp
                      <td data-label="product_order">#{{ $order->id }}</td>
                      <td data-label="date">{{ $date->day }} {{ $date->locale('it')->monthName }} {{ $date->year }}</td>
                      <td data-label="total">{{ $order->total }} &euro;</td>
                      <td data-label="order_state">
                        @if($order->delivered == true)
                        Spedito
                        @else
                        <b>In preaparazione</b>
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

