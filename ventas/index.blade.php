<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios</title>
</head>

<body>
  @include('headeradmin')


  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>id venta</th>
        <th>id_usuario</th>
        <th>id_producto </th>
        <th>cantidad </th>
        <th>total</th>
        <th>accion</th>

      </tr>
    </thead>
    <tbody>
      @foreach( $datos_b as $datos)
      <tr>

        <td>{{ $datos->id_venta}}</td>
        <td>{{ $datos->id_usuario}}</td>
        <td>{{ $datos->id_producto}}</td>
        <td>{{ $datos->cantidad}}</td>
        <td>{{ $datos->total}}</td>
        



        <td>
          <a type="button" href="{{ url('/ventas/'.$datos->id_venta.'/edit') }}"> Editar</a>

          <form action="{{ url('/ventas/'.$datos->id_venta) }}" method="post">
            @csrf
            {{method_field ('DELETE')}}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
          </form>
        </td>

      </tr>
      @endforeach


    </tbody>
  </table>


  <div style="text-align:center" class="mt-3">
    <a href="{{ url('/ventas/create')}}" target="_blank" class="btn btn-main ">Registrar nueva venta <i class="ti-angle-right ml-3"></i></a>
  </div>

  @include('scripts')
</body>

</html>