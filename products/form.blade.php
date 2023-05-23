
<br>

<div>
  <h1>Nombre</h1>
  <input type="text" class="form-control" placeholder="Nombre"  name="nombre" id="nombre"
  value="{{ isset ($datos_e->nombre)?$datos_e->nombre:''}}">
</div>

<br>

<div>
  <h1>Descripcion </h1>
  <input type="text" class="form-control" placeholder="Descripcion"  name="descripcion" id="descripcion"
  value="{{ isset ($datos_e->descripcion)?$datos_e->descripcion:''}}">
</div>

<br>

<div>
  <h1>Precio </h1>
  <input type="text" class="form-control" placeholder="Precio"  name="precio" id="precio"
  value="{{ isset ($datos_e->precio)?$datos_e->precio:''}}">
</div>

<br>

<div>
    <h2>Foto</h2>
    <input type="file" class="form-control" value="{{ isset($datos_e->foto)?$datos_e->foto:''}}" id="foto"  name="foto" >
  </div>

  <div>
    <h2>Categoria id</h2>
    <input type="text" class="form-control" value="{{ isset($datos_e->id_categoria)?$datos_e->id_categoria:''}}" id="id_categoria"  name="id_categoria" >
  </div>

<br>





