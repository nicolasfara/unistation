@extends('layouts.app')

@section('nav')
@include('includes.nav')
@endsection

@section('content')
<div class="container">
  <div class="row">
    <table id="cart" class="table table-hover table-condensed centered">
      <thead>
        <tr>
          <th>Prodotto</th>
          <th>Descrizione</th>
          <th>Prezzo</th>
          <th>Quantità</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr id=" ">
          <td data-th="Prodotto">
            <div class="row">
              <div class="col-sm-4 hidden-xs"><img alt="foto" src="" class="img-responsive"/></div>
            </div>
          </td>
          <td data-th="Descrizione">
           <div class="col-sm-10">
            <p>Descrizione </p>
          </div>
        </td>
        <form>
          <td data-th="Prezzo">
            <p>Prezzo €</p>
          </td>
          <td data-th="Quantità">
            <label for="qta" class="col-lg-4 col-sm-4 sr-only">Quantità</label>
            <form >
              <input type="number" name="quantity"
              min="1" max="100" step="1" value="1">
            </form>

          </td>
          <td></td>
          <td data-th="">
            <label for="btn_delete" class="col-lg-2 col-sm-2 sr-only control-label">Elimina:</label>
            <button aria-label="Elimina" onclick="" type="button" class="btn btn-danger btn-sm" id="btn_delete" name="btn_delete"><em class="fa fa-trash-o"></em></button>
          </td>
        </form>

      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="2" class=""></td>
        <td class=" text-left"> Totale parziale</td>
        <td colspan="1" class=""></td>
        <td class="text-right" id="lblSubTotale"> €</td>
      </tr>
      <tr>
        <td colspan="2" class=""></td>
        <td class=" text-left"> Spese di spedizione</td>
        <td colspan="1" class=""></td>
        <td class="text-right">2 €</td>
      </tr>
      <tr>
        <td colspan="2" class=""></td>
        <td class=" text-left"><strong>Totale</strong></td>
        <td colspan="1" class=""></td>
        <td class="text-right" id="lblTotale"> € </td>
      </tr>
    </tfoot>
  </table>
</div>
<div class="row">
  <div class="col-sm-6">
    <input type = "hidden" name = "prezzoTot" value ="">
     <button class="btn waves-effect waves-light" type="submit" name="action">Checkout
    <i class="material-icons right">send</i>
  </button>
  </div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/clienthome.js') }}"></script>
@endsection

