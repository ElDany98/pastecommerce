

<div >
  <h1>id usuario</h1>
  <input type="text" class="form-control" placeholder="Id usuario"  name="id_usuario" id="id_usuario"
  value="{{ isset ($datos_e->id_usuario)?$datos_e->id_usuario:''}}">
</div>

<br>

<div >
  <h1>id producto</h1>
  <input type="text" class="form-control" placeholder="Id producto"  name="id_producto" id="id_producto"
  value="{{ isset ($datos_e->id_producto)?$datos_e->id_producto:''}}">
</div>

<br>

<div>
  <h1>id venta </h1>
  <input type="text" class="form-control" placeholder="id venta"  name="id_venta" id="id_venta"
  value="{{ isset ($datos_e->id_venta)?$datos_e->id_venta:''}}">
</div>
<br>


<br>
<div>
  <h1>Motivo </h1>
  <input type="text" class="form-control" placeholder="Motivo"  name="motivo" id="motivo"
  value="{{ isset ($datos_e->motivo)?$datos_e->motivo:''}}">
</div>
<br>


