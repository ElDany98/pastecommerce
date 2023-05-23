<div>
  <h1>Nombre de Usuario</h1>
  <input type="text" class="form-control" placeholder="username" name="username" id="username" value="{{ isset ($datos_e->username)?$datos_e->username:''}}">
</div>

<br>

<div>
  <h1>Descripcion de la queja</h1>
  <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion" id="Descripcion" value="{{ isset ($datos_e->Descripcion)?$datos_e->Descripcion:''}}">
</div>