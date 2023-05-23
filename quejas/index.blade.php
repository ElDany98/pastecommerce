<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quejas</title>
</head>

<body>
  @include('headeradmin')


  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>id queja</th>
        <th>username</th>
        <th>descripcion</th>
        <th>accion</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $datos_b as $datos)
      <tr>

        <td>{{ $datos->id_queja}}</td>
        <td>{{ $datos->username}}</td>
        <td>{{ $datos->Descripcion}}</td>





        <td>
          <a type="button" href="{{ url('/quejas/'.$datos->id_queja.'/edit') }}"> Editar</a>

          <form action="{{ url('/quejas/'.$datos->id_queja) }}" method="post">
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
    <a href="{{ url('/quejas/create')}}" target="_blank" class="btn btn-main ">Registrar nueva queja <i class="ti-angle-right ml-3"></i></a>
  </div>

  @include('scripts')
</body>

</html>