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
            <div class="col s12 m8">
              <h5 class="center">Il tuo carrello</h5>
              @foreach($cart_content as $elem)
              <div class="card-panel row" id="row-{{ $elem->id }}">
                  <div class="col s10">{{ $elem->name }}</div>
                  <div class="col s2 right-align">{{ $elem->price }}&euro;</div>
                  <div class="col s6 m3">
                    <input placeholder="Quantità" name="qty" id="new_quantity_{{ $elem->id }}" type="number" min="1" step="1" value="{{ $elem->quantity }}">
                  </div>
                  <div class="col s3"><a onclick="updateQuantity({{ $elem->id }})" class="waves-effect waves-light btn "><i class="material-icons">refresh</i></a></div>
                  <div class="col s3 m6 right-align"><a onclick="removeFromCart({{ $elem->id }})" class="waves-effect waves-light btn "><i class="material-icons">delete</i></a></div>
              </div>
              @endforeach
            </div>
            <div class="col s12 m4">
              <div class="card">
                <div class="card-content" >
                  <table>
                    <thead>
                      <h5 class="center">Riepilogo</h5>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Subtotale</td>
                        <td id="subtot">
                          <div class="right-align">{{ Cart::session(Auth::id())->getSubTotal() }}&euro;</div>
                        </td>
                      </tr>
                      <tr>
                        <td>Spese di spedizione</td>
                        <td>
                          <div class="right-align">Gratis</div>
                        </td>
                      </tr>
                      <tr>
                        <td>Totale</td>
                        <td id=tot>
                          <div class="right-align">{{ Cart::session(Auth::id())->getTotal() }}&euro;</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="input-field">
                            <input id="date" type="text" class="datepicker">
                            <label for="date">Giorno di consegna</label>
                            @error('date')
                            <span>{{ $message }}</span>
                            @enderror
                          </div>
                        </td>
                        <td>
                          <div class="input-field">
                            <input id="time" type="text" class="timepicker">
                            <label for="time">Ora di consegna</label>
                            @error('time')
                            <span>{{ $message }}</span>
                            @enderror
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="{{ url('client/home') }}" class="btn-flat waves-effect">Indietro</a>
                        </td>
                        <td>
                          <a class="btn waves-effect waves-light hoverable deep-orange" type="submit" name="action" onclick="sendOrder()">Checkout<i class="material-icons right">send</i></a>
                        </td>
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
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
<script>
  function removeFromCart(product_id) {
    var req = new HttpClient();
    req.get("{{ url('client/cart/remove') }}?product_id=" + product_id, function(response) {
      var cart_qty = document.getElementById('cart_qty')
      var subtot = document.getElementById('subtot')
      var tot = document.getElementById('tot')
      var row = document.getElementById('row-' + product_id)
      row.parentNode.removeChild(row)
      var res_parsed = JSON.parse(response)
      cart_qty.textContent = res_parsed.cart_qty
      subtot.textContent = res_parsed.stot + '\u20AC'
      tot.textContent = res_parsed.tot + '\u20AC'
    });
  }

  function updateQuantity(product_id) {
    var quantity = document.getElementById('new_quantity_' + product_id).value
    var req = new HttpClient();
    req.get("{{ url('client/cart/update') }}?product_id=" + product_id +"&quantity=" + quantity, function(response) {
      var cart_qty = document.getElementById('cart_qty')
      var subtot = document.getElementById('subtot')
      var tot = document.getElementById('tot')
      var row = document.getElementById('row-' + product_id)
      var res_parsed = JSON.parse(response)
      cart_qty.textContent = res_parsed.cart_qty
      subtot.textContent = res_parsed.stot + '\u20AC'
      tot.textContent = res_parsed.tot + '\u20AC'
    });
  }

  function sendOrder() {
    var m_date = document.getElementById('date').value
    var time = document.getElementById('time').value
    location.href = '{{ url('client/payment') }}' + '?date=' + m_date + '&time=' + time
  }
</script>
@endsection

