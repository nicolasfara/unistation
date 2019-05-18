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
                        <input name="new_quantity" id="new_quantity" type="number" step="1" class="validate" value="{{ $elem->quantity }}">
                        <label for="new_dish_price">Quantità</label>
                      </div>
                    </td>
                    <td>{{ $elem->price }}&euro;</td>
                    <td><a class="waves-effect waves-light btn "><i class="material-icons">refresh</i></a></td>
                    <td><a onclick="removeFromCart({{ $elem->id }})"class="waves-effect waves-light btn "><i class="material-icons">delete</i></a></td>
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
                  <td>{{ Cart::session(Auth::id())->getSubTotal() }}&euro;</td>
                </tr>
                <tr>
                  <td>Spese di spedizione</td>
                  <td>Gratis</td>
                </tr>
                <tr>
                  <td>Totale</td>
                  <td>{{ Cart::session(Auth::id())->getTotal() }}€</td>
                </tr>
                <tr>
                  <td><button class="btn waves-effect waves-light" type="submit" name="action" href="{{ url('client/payment') }}">Checkout<i class="material-icons right">send</i> </button></td>
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
    var row = document.getElementById('row-' + product_id)
    row.parentNode.removeChild(row)
    console.log("removed")
    var res_parsed = JSON.parse(response)
    cart_qty.textContent = res_parsed.cart_qty
  });
}
</script>
@endsection

