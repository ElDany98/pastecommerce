
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenes</title>
</head>
<body>
@include('headeradmin')


<table class="table">
  <thead class="table-dark">
  <tr>
            <th>id pedido</th>
            <th>id venta </th>
            <th>estado envio</th>
            <th>accion</th>
            
    </tr>
  </thead>
  <tbody>
  @foreach( $datos_b as $datos)
        <tr>
            
            <td>{{ $datos->id_pedido}}</td>
            <td>{{ $datos->id_venta}}</td>
            <td>{{ $datos->estado_envio}}</td>
          
            
            <td>
                
                <form action="{{ url('/pedido/'.$datos->id_pedido) }}" method="post">
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
<a href="{{ url('/pedido/create')}}" target="_blank" class="botton-agileits" >Registrar Nuevo Pedido <i class="ti-angle-right ml-3"></i></a>
</div>

@include('scripts')   
 
</body>
</html>


