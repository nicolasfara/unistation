<div class="section no-pad-bot" id="index-banner">
  <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
    @foreach($types as $type)
      <li class="tab"><a href="#{{ $type }}">{{ $type }}</a></li>
    @endforeach
  </ul>
  @foreach($types as $type)
    <div id="{{ $type }}" class="col s12">
      <ul class="collapsible popout">
        @foreach($products as $product)
        @if($product->type == $type)
        <li>
          <div class="collapsible-header">
            {{ $product->name }}
          </div>
          <div class="collapsible-body">
            <form class="col s12" action="{{ url('products/$product->id') }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="input-field col s9">
                  <input id="dish_name" type="text" class="validate" value="{{ $product->name }}">
                  <label for="dish_name">Nome Piatto</label>
                </div>
                <div class="input-field col s2">
                  <input id="price" type="number" step="0.01" class="validate" value="{{ $product->price }}">
                  <label for="price">Prezzo</label>
                </div>
                <div class="input-field col s1">
                  <a class="btn-flat"><i class="material-icons">delete</i></a>
                </div>
                <a class="waves-effect waves-light btn">Aggiorna</a>
              </div>
            </form>
          </div>
        </li>
        @endif
        @endforeach
      </ul>
    </div>
  @endforeach
  <!-- Modal Trigger -->
  <a data-target="add-new-product" class="btn-floating btn-large waves-effect waves-light red right modal-trigger"><i class="material-icons">add</i></a>

  <!-- Modal Structure -->
  <div id="add-new-product" class="modal">
    <div class="modal-content">
      <h4>Aggiungi nuovo prodotto</h4>
      <form id="add-product-form" class="col s12" action="{{ url('products') }}" method="POST">
        @csrf
        <div class="row">
          <div class="input-field col s8">
            <input name="dish_name" id="input_dish_name" type="text" class="validate">
            <label for="input_dish_name">Nome Piatto</label>
          </div>
          <div class="input-field col s2">
            <select name="type" required>
              <option value="" disabled selected>Seleziona tipo</option>
              @foreach($types as $type)
              <option value="{{ $type }}">{{ $type }}</option>
              @endforeach
            </select>
            <label>Tipo prodotto</label>
          </div>
          <div class="input-field col s2">
            <input name="dish_price" id="input_price" type="number" step="0.01" class="validate">
            <label for="input_price">Prezzo</label>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <a onclick="event.preventDefault(); document.getElementById('add-product-form').submit();" class="waves-effect waves-green btn-flat">Aggiungi</a>
      <a class="modal-close waves-effect waves-green btn-flat">Chiudi</a>
    </div>
  </div>
</div>
