<div class="section no-pad-bot" id="index-banner">
  <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
    @foreach($types as $type)
      <li class="tab"><a href="#{{ $type }}">{{ $type }}</a></li>
    @endforeach
  </ul>
  @foreach($types as $type)
    <div id="{{ $type }}" class="col s12">
      <ul class="collapsible popout">
        @forelse($products as $product)
        @if($product->type == $type)
        <li>
          <div class="collapsible-header">
            {{ $product->name }}
            <div class="right">{{ $product->price }}&euro;</div>
          </div>
          <div class="collapsible-body">
            <form id="update-product-form" class="col s12" action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="row">
                <div class="input-field col s9">
                  <input name="update_dish_name" id="update_dish_name" type="text" class="validate" value="{{ $product->name }}">
                  <label for="update_dish_name">Nome Piatto</label>
                </div>
                <div class="input-field col s2">
                  <input name="update_dish_price" id="update_dish_price" type="number" step="0.01" class="validate" value="{{ $product->price }}">
                  <label for="update_dish_price">Prezzo</label>
                </div>
                <div class="input-field col s1">
                  <a onclick="event.preventDefault(); document.getElementById('delete-product{{ $product->id }}-form').submit();" class="btn-flat"><i class="material-icons">delete</i></a>
                </div>
                <button class="waves-effect waves-light btn" type="submit" name="action">Aggiorna</button>
              </div>
            </form>
            <form id="delete-product{{ $product->id }}-form" action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
            </form>
          </div>
        </li>
        @endif
        @empty
        <span>Non ci sono prodotti qui... Aggiungine uno ora!</span>
        @endforelse
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
            <input name="new_dish_name" id="new_dish_name" type="text" class="validate">
            <label for="new_dish_name">Nome Piatto</label>
          </div>
          <div class="input-field col s2">
            <select name="new_type" required>
              <option value="" disabled selected>Seleziona tipo</option>
              @foreach($types as $type)
              <option value="{{ $type }}">{{ $type }}</option>
              @endforeach
            </select>
            <label>Tipo prodotto</label>
          </div>
          <div class="input-field col s2">
            <input name="new_dish_price" id="new_dish_price" type="number" step="0.01" class="validate">
            <label for="new_dish_price">Prezzo</label>
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
