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
                  <tr>
                    <td>Tagliatelle al ragù</td>
                    <td data-th="Quantità">
                      <div class="input-field col s6">
                        <input name="new_quantity" id="new_quantity" type="number" step="1" class="validate">
                        <label for="new_dish_price">Quantità</label>
                      </div>
                    </td>
                    <td>5 €</td>
                    <td><a class="waves-effect waves-light btn "><i class="material-icons">refresh</i></a></td>
                    <td><a class="waves-effect waves-light btn "><i class="material-icons"> delete</i></a></td>
                  </tr>
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
                  <td>5 €</td>
                </tr>
                <tr>
                  <td>Spese di spedizione</td>
                  <td>2 €</td>
                </tr>
                <tr>
                  <td>Totale</td>
                  <td>7 €</td>
                </tr>
                <tr>
                  <td> <button class="btn waves-effect waves-light" type="submit" name="action" href="{{ url('client/payment') }}">Checkout<i class="material-icons right">send</i> </button></td>
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
@endsection

