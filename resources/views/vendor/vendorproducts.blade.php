<div class="section no-pad-bot" id="index-banner">
	<ul class="tabs tabs-fixed-width tab-demo z-depth-1">
		@foreach($types as $type)
		@switch($type)
		@case('appetizer')
		<li class="tab"><a class="active" href="#{{ $type }}">Antipasti</a></li>
		@break
		@case('first')
		<li class="tab"><a href="#{{ $type }}">Primi</a></li>
		@break
		@case('second')
		<li class="tab"><a href="#{{ $type }}">Secondi</a></li>
		@break
		@case('salad')
		<li class="tab"><a href="#{{ $type }}">Insalate</a></li>
		@break
		@case('dessert')
		<li class="tab"><a href="#{{ $type }}">Dolci</a></li>
		@break
		@case('drink')
		<li class="tab"><a href="#{{ $type }}">Bevande</a></li>
		@break
		@endswitch
		@endforeach
	</ul>
	@foreach($types as $type)
	<div id="{{ $type }}" class="col s12">
		<ul class="collapsible popout">
			@forelse($products as $product)
			@if($product->type == $type)
			<li>
				<div class="collapsible-header">
            <!--div class="row valign-wrapper">
              <div class="col s2">
                @if($product->image != null)
                <img src="Storage::url($product->image)" alt="" class="circle responsive-img">
                @else
                <img src="https://s3-eu-west-1.amazonaws.com/unistation/placeholders/imageprofile-placeholder-350x350.png" alt="" class="circle responsive-img">
                @endif
              </div>
              <div class="col s8">
                <span class="black-text">
                {{ $product->name }}
                </span>
              </div>
              <div class="col s2">
                <div class="right">{{ $product->price }}&euro;</div>
              </div>
          </div-->
          <ul class="collection">
          	<div class="row">     
          		<li class="collection-item avatar">
          			@if($product->image != null)
          			<img src="{{ Storage::url($product->image) }}" alt="" class="circle responsive-img">
          			@else
          			<img src="https://s3-eu-west-1.amazonaws.com/unistation/placeholders/imageprofile-placeholder-350x350.png" alt="" class="circle responsive-img">
          			@endif
          			<div class="col s9">
          				<p class="title">{{ $product->name }}</p>
          			</div>
          			<div class="col s3">
          				<div class="secondary-content">{{ $product->price }}&euro;</div>
          			</div>
          		</div>
          	</li>
          </ul>
      </div>
      <div class="collapsible-body">
      	<form id="update-product-form" enctype="multipart/form-data" class="col s12" action="{{ route('products.update', ['id' => $product->id]) }}" method="POST">
      		@csrf
      		@method('PATCH')
      		<div class="row">
      			<div class="input-field col s7">
      				<input name="update_dish_name" id="update_dish_name" type="text" class="validate" value="{{ $product->name }}">
      				<label for="update_dish_name">Nome Piatto</label>
      			</div>
      			<div class="input-field col s3">
      				<input name="update_dish_price" id="update_dish_price" type="number" step="0.01" class="validate" value="{{ $product->price }}">
      				<label for="update_dish_price">Prezzo</label>
      			</div>
      			<div class="input-field col s2">
      				<a onclick="event.preventDefault(); document.getElementById('delete-product{{ $product->id }}-form').submit();" class="btn-flat"><i class="material-icons">delete</i></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="file-field input-field col s12 m6">
      				<div class="btn deep-orange">
      					<span>Carica</span>
      					<input name="productimg" type="file">
      				</div>
      				<div class="file-path-wrapper">
      					<input class="file-path validate" type="text" placeholder="Carica un' immagine per il prodotto">
      				</div>
      			</div>
      		</div>
      		<button class="waves-effect waves-light btn deep-orange" type="submit">Aggiorna</button>
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
<div id="add-new-product" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>Aggiungi nuovo prodotto</h4>
		<form id="add-product-form" class="col s12" action="{{ url('products') }}" method="POST">
			@csrf
			<div class="row">
				<div class="input-field col s4 m8">
					<input name="new_dish_name" id="new_dish_name" type="text" class="validate">
					<label for="new_dish_name">Nome Piatto</label>
				</div>
				<div class="input-field col s4 m2">
					<select name="new_type">
						<option value="" disabled selected>Tipo</option>
						@foreach($types as $type)
						@switch($type)
						@case('appetizer')
						<option value="{{ $type }}">Antipasti</option>
						@break
						@case('first')
						<option value="{{ $type }}">Primi</option>
						@break
						@case('second')
						<option value="{{ $type }}">Secondi</option>
						@break
						@case('salad')
						<option value="{{ $type }}">Insalate</option>
						@break
						@case('dessert')
						<option value="{{ $type }}">Dolci</option>
						@break
						@case('drink')
						<option value="{{ $type }}">Bevande</option>
						@break
						@endswitch
						@endforeach
					</select>
					<label>Tipo prodotto</label>
				</div>
				<div class="input-field col s4 m2">
					<input name="new_dish_price" id="new_dish_price" type="number" step="0.01" class="validate">
					<label for="new_dish_price">Prezzo</label>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<a onclick="event.preventDefault(); document.getElementById('add-product-form').submit();" class="waves-effect waves-green btn-flat deep-orange">Aggiungi</a>
		<a class="modal-close waves-effect waves-green btn-flat">Chiudi</a>
	</div>
</div>
</div>
