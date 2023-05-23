<div>
  <h1>id usuario</h1>
  <input type="text" class="form-control" placeholder="id usuario" name="id_usuario" id="id_usuario" value="{{ isset ($datos_e->id_usuario)?$datos_e->id_usuario:''}}">
</div>

<br>
<div>
  <h1>id producto </h1>
  <input type="text" class="form-control" placeholder="id producto" name="id_producto" id="id_prodcuto" value="{{ isset ($datos_e->id_prodcuto)?$datos_e->id_prodcuto:''}}">
</div>
<br>
<div>
  <h1>Cantidad </h1>
  <input type="text" class="form-control" placeholder="Cantidad" name="cantidad" id="cantidad" value="{{ isset ($datos_e->cantidad)?$datos_e->cantidad:''}}">
</div>
<br>
<div>
  <h1>total </h1>
  <input type="text" class="form-control" placeholder="total" name="total" id="direccion" value="{{ isset ($datos_e->total)?$datos_e->total:''}}">
</div>
