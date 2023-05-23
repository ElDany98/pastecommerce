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

        <th>id usuario</th>
        <th>nombre/th>
        <th>apellido_p</th>
        <th>apellido_m</th>
        <th>direccion</th>
        <th>telefono</th>
        <th>username</th>
        <th>password</th>
        <th>tipo usuario</th>
        <th>accion</th>

      </tr>
    </thead>
    <tbody>
      @foreach( $datos_b as $datos)
      <tr>

        <td>{{ $datos->id_usuario}}</td>
        <td>{{ $datos->nombre}}</td>
        <td>{{ $datos->apellido_p}}</td>
        <td>{{ $datos->apellido_m}}</td>
        <td>{{ $datos->direccion}}</td>
        <td>{{ $datos->telefono}}</td>
        <td>{{ $datos->username}}</td>
        <td>{{ $datos->password}}</td>
        <td>{{ $datos->id_tipo_usu}}</td>




        <td>
          <a type="button" href="{{ url('/users/'.$datos->id_usuario.'/edit') }}"> Editar</a>

          <form action="{{ url('/users/'.$datos->id_usuario) }}" method="post">
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
    <a href="{{ url('/usuario/create')}}" target="_blank" class="botton-agileits">Registrar nuevo Usuario <i class="ti-angle-right ml-3"></i></a>
  </div>

  @include('scripts')
</body>

</html>