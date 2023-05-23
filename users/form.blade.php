<div>
  <h1>Nombre</h1>
  <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value="{{ isset ($datos_e->nombre)?$datos_e->nombre:''}}">
</div>

<br>
<div>
  <h1>Apellido paterno </h1>
  <input type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_p" id="apellido_p" value="{{ isset ($datos_e->apellido_p)?$datos_e->apellido_p:''}}">
</div>
<br>
<div>
  <h1>Apellido materno </h1>
  <input type="text" class="form-control" placeholder="Apellido Materno" name="apellido_m" id="apellido_m" value="{{ isset ($datos_e->apellido_m)?$datos_e->apellido_m:''}}">
</div>
<br>
<div>
  <h1>Direccion </h1>
  <input type="text" class="form-control" placeholder="Direccion" name="direccion" id="direccion" value="{{ isset ($datos_e->direccion)?$datos_e->direccion:''}}">
</div>
<br>
<div>
  <h1>Telefono </h1>
  <input type="text" class="form-control" placeholder="Telefono" name="telefono" id="telefono" value="{{ isset ($datos_e->telefono)?$datos_e->telefono:''}}">
</div>
<br>
<div>
  <h1>Nombre de usuario </h1>
  <input type="text" class="form-control" placeholder="Nombre de Usuario" name="username" id="username" value="{{ isset ($datos_e->username)?$datos_e->username:''}}">
</div>
<br>

<div>
  <h1>Contraseña </h1>
  <input type="text" class="form-control" placeholder="Contraseña" name="password" id="password" value="{{ isset ($datos_e->password)?$datos_e->password:''}}">
</div>


<div>
  <h1>tipo </h1>
  <input type="text" class="form-control" placeholder="Contraseña" name="id_tipo_usu" id="id_tipo_usu" value="{{ isset ($datos_e->id_tipo_usu)?$datos_e->id_tipo_usu:''}}">
</div>



<br>