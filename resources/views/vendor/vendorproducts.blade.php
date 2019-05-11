<div class="section no-pad-bot" id="index-banner">
  <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
    @foreach($types as $type)
      <li class="tab"><a href="#{{ $type }}">{{ $type }}</a></li>
    @endforeach
  </ul>
  @foreach($types as $type)
    <div id="{{ $type }}" class="col s12">
      <ul class="collapsible popout">
        <!--foreach..-->
        <li>
          <div class="collapsible-header">
            {{ $type }}
          </div>
          <div class="collapsible-body">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s9">
                  <input id="dish_name" type="text" class="validate">
                  <label for="dish_name">Nome Piatto</label>
                </div>
                <div class="input-field col s2">
                  <input id="price" type="number" step="0.01" class="validate">
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
        <!--endforeach-->

        <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#add-new-product">Modal</a>

        <!-- Modal Structure -->
        <div id="add-new-product" class="modal">
          <div class="modal-content">
            <h4>Aggiungi nuovo prodotto</h4>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s10">
                  <input id="dish_name" type="text" class="validate">
                  <label for="dish_name">Nome Piatto</label>
                </div>
                <div class="input-field col s2">
                  <input id="price" type="number" step="0.01" class="validate">
                  <label for="price">Prezzo</label>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aggiungi</a>
          </div>
        </div>
      </ul>
    </div>
  @endforeach
</div>
