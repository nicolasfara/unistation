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
              <div class="card">
               <div class="card-content" >
                <table>
                  <thead>
                   <h5 class="center">Il tuo carrello</h5>
                 </thead>
                 <tbody>
                  @foreach($cart_content as $elem)
                  <tr id="row-{{ $elem->id }}">
                    <td>{{ $elem->name }}</td>
                    <td data-th="Quantità">
                      <div class="input-field col s6">
                        <input name="qty" id="new_quantity_{{ $elem->id }}" type="number" step="1" class="validate" value="{{ $elem->quantity }}">
                        <label for="qty">Quantità</label>
                      </div>
                    </td>
                    <td>{{ $elem->price }}&euro;</td>
                    <td><a onclick="updateQuantity({{ $elem->id }})" class="waves-effect waves-light btn "><i class="material-icons">refresh</i></a></td>
                    <td><a onclick="removeFromCart({{ $elem->id }})" class="waves-effect waves-light btn "><i class="material-icons">delete</i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
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
                  <td id="subtot">{{ Cart::session(Auth::id())->getSubTotal() }}&euro;</td>
                </tr>
                <tr>
                  <td>Spese di spedizione</td>
                  <td>Gratis</td>
                </tr>
                <tr>
                  <td>Totale</td>
                  <td id=tot>{{ Cart::session(Auth::id())->getTotal() }}&euro;</td>
                </tr>
                <tr>
                  <td><a class="btn waves-effect waves-light" type="submit" name="action" href="{{ url('client/payment') }}">Checkout<i class="material-icons right">send</i> </a></td>
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
  console.log("ok")
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
</script>
@endsection

