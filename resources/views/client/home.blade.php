@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <div class="row">
      <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
        @foreach($types as $type)
        <li class="tab"><a href="#{{ $type }}">{{ $type }}</a></li>
        @endforeach
      </ul>
      <div class="section no-pad-bot" id="index-banner">
        @foreach($types as $type)
        <div id="{{ $type }}" class="col s12">
          <div class="row">
            @foreach($products as $product)
            @if($product->type == $type)
            <div class="col s12 m4">
              <div class="card">
                <div class="card-image">
                 @if($product->image != null)
                 <img src="{{ Storage::url($product->image) }}" alt="" class="circle responsive-img">
                 @else
                 <img src="https://s3-eu-west-1.amazonaws.com/unistation/placeholders/imageprofile-placeholder-350x350.png" alt="" class="circle responsive-img">
                 @endif
                 <a id"add_btn" onclick="addToCart({{ $product->id }})" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
               </div>
               <div class="card-content" >
                <span class="card-title center-align">{{ $product->name }}</span>
                <p class="right-align">{{ $product->price }}&euro;</p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ $vendors[$product->vendor_id]->name }}<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
<script>
function addToCart(product_id) {
  var req = new HttpClient()
  req.get("{{ url('client/cart/add') }}?product_id=" + product_id, function(response) {
    var cart_qty = document.getElementById('cart_qty')
    if (cart_qty.style.display === 'none') {
      cart_qty.style.display = 'block'
    }
    var res_parsed = JSON.parse(response)
    console.log(res_parsed.cart_qty)
    cart_qty.textContent = res_parsed.cart_qty
    M.toast({html: 'Prodotto aggiunto', classes: 'rounded'})
  })
}
</script>
@endsection
