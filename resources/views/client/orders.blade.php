@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="section no-pad-bot" id="index-banner">
  <div class="container">
        <div class="col s12">
          <div class="row">
            <div class="card">
              <div class="card-content" >
              	<div class="row">
              		<div class="col s6">
                		<a href="{{ url('client/home') }}" class="btn-flat waves-effect ">Indietro</a>
                	</div>
                	<div class="col s6">
                    	<h5 class="">I tuoi ordini</h5>
                    </div>
                </div>
                <table class="centered">
                  <thead>
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

