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
                  <div class="col s5">
                    <a href="{{ url('client/home') }}" class="btn-flat waves-effect ">Indietro</a>
                  </div>
                  <div class="col s7">
                      <h5 class="">I tuoi ordini</h5>
                    </div>
                </div>
                <table class="centered responsive-table">
                  <thead>
                    <tr>
                      <th>Numero ordine</th>
                      <th>Data</th>
                      <th>Prezzo totale</th>
                      <th>Stato ordine</th>
                      <th>Feedback</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($orders as $order)
                    <form action="{{url('client/orders', [$order->id])}}" method="POST">
                      @method('patch')
                      @csrf
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
                        <td data-label="feedback">
                          <!-- Modal Trigger -->
                          <a class="waves-effect waves-light deep-orange btn modal-trigger
                              @if($order->feedback)
                                disabled 
                              @endif"
                              href="#modal{{$order->id}}">
                              <i class="material-icons">grade</i>
                          </a>
                        </td>
                      </tr>
                      <!-- Modal Structure -->
                      <div id="modal{{$order->id}}" class="modal">
                        <div class="modal-content">
                          <h4>Come valuti il servizio?</h4>
                          <div>
                          @for ($i = 1; $i <= 5; $i++)
                            <i class="material-icons rate" onmouseover = "fillStar(this)">star_border</i>
                          @endfor
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="modal-close waves-effect waves-green btn-flat" type="submit">Invia</a>
                        </div>
                      </div>
                    </form>
                    @empty
                    <tr>
                      <td colspan='4'><h5>Non ci sono ancora ordini!<h5></td>
                    </tr>
                    @endforelse
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

