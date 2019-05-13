<div class="container">
  <h1>Modifica profilo</h1>
  <div class="valign-wrapper row login-box">
    <div class="col card hoverable s12">
      <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('vendor-edit.update', Auth::id()) }}">
        @csrf
        @method('PATCH')
        <div class="card-content">
          <div class="row">
            <div class="input-field col s12">
              <label for="vendor_name">Nome</label>
              <input type="text" class="validate" name="vendor_name" id="vendor_name" value="{{ Auth::user()->name }}"/>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label for="vendor_name">Email</label>
              <input type="email" class="validate" name="vendor_email" id="vendor_email" value="{{ Auth::user()->email }}"/>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <label for="vendor_name">P.Iva</label>
              <input type="number" class="validate" name="vendor_piva" id="vendor_piva" value="{{ Auth::user()->p_iva }}"/>
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input name="newavatar" type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Carica avatar">
              </div>
            </div>
          </div>
        </div>
        <div class="card-action right-align">
          <input type="submit" class="btn teal lighten-1 waves-effect waves-light" value="Aggiorna">
        </div>
      </form>
    </div>
  </div>
</div>
