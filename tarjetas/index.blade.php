
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas de usuario</title>
</head>
<body>
@include('headeradmin')


<table class="table">
  <thead class="table-dark">
  <tr>
            <th>id tarjeta</th>
            <th>numero </th>
            <th>fehca de expiracion</th>
            <th>titular</th>
            <th>accion</th>
            
    </tr>
  </thead>
  <tbody>
  @foreach( $datos_b as $datos)
        <tr>
            
            <td>{{ $datos->id_tarjeta}}</td>
            <td>{{ $datos->numero_tarjeta}}</td>
            <td>{{ $datos->fecha_expiracion}}</td>
            <td>{{ $datos->titular}}</td>

       
            
           
            
            <td>
                <a type="button"  href="{{ url('/tarjetas/'.$datos->id_tarjeta.'/edit') }}">  Editar</a>

                <form action="{{ url('/tarjetas/'.$datos->id_tarjeta) }}" method="post">
                @csrf
               {{method_field ('DELETE')}}
                <input  type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form>
            </td>

        </tr>
        @endforeach
        
    
  </tbody>
</table>

<div style="text-align:center" class="mt-3">
<a href="{{ url('/tarjetas/create')}}" target="_blank" class="botton-agileits" >Registrar nueva tarjeta de usuario <i class="ti-angle-right ml-3"></i></a>
</div>

@include('scripts')    
</body>
</html>


