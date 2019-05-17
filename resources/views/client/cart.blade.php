@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="container">
  <div class="row">
    <table id="cart" class="responsive-table">
      <thead>
        <tr>
          <th>Prodotto</th>
          <th>Descrizione</th>
          <th>Prezzo</th>
          <th>Quantità</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td data-th="Prodotto">
            <div class=""><img alt="foto" src="" class="img-responsive"/></div>
          </td>
          <td data-th="Descrizione">Descrizione</td>
          <form>
            <td data-th="Prezzo">Prezzo €</td>
            <td data-th="Quantità">
              <form class="input_qta">
                <input type="number" name="quantity"
                min="1" max="100" step="1" value="1">
              </form>
            </td>
            <td>
              <a class="waves-effect waves-light btn "><i class="material-icons">refresh</i></a>
            </td>
            <td>
              <a class="waves-effect waves-light btn "><i class="material-icons"> delete</i></a>
            </td>
          </form>

        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td> Totale parziale</td>
          <td id="lblSubTotale">€</td>
        </tr>
        <tr>
          <td> Spese di spedizione</td>
          <td>2 €</td>
        </tr>
        <tr>
          <td>Totale</td>
          <td id="lblTotale"> € </td>
        </tr>
        <tr>
            <td> <button class="btn waves-effect waves-light" type="submit" name="action">Checkout<i class="material-icons right">send</i> </button></td>
        </tr>
      
      </tfoot>

    </table>
  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection

