

<br>
<div>
  <h1>Numero de Tarjeta</h1>
  <input type="text" class="form-control" placeholder="numero_tarjeta"  name="numero_tarjeta" id="numero_tarjeta"
  value="{{ isset ($datos_e->numero_tarjeta)?$datos_e->numero_tarjeta:''}}">
</div>

<br>
<div>
  <h1>Fecha de expiracion</h1>
  <input type="text" class="form-control" placeholder="MM/AA"  name="fecha_expiracion" id="fecha_expiracion"
  value="{{ isset ($datos_e->fecha_expiracion)?$datos_e->fecha_expiracion:''}}">
</div>

<br>
<div>
  <h1>cvv</h1>
  <input type="text" class="form-control" placeholder="CVV"  name="cvv" id="cvv"
  value="{{ isset ($datos_e->cvv)?$datos_e->cvv:''}}">
</div>

<br>
<div>
  <h1>Nombre del Titular</h1>
  <input type="text" class="form-control" placeholder="Nombre Completo"  name="titular" id="titular"
  value="{{ isset ($datos_e->titular)?$datos_e->titular:''}}">
</div>
