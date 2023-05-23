
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones</title>
</head>
<body>
@include('headeradmin')


<table class="table">
  <thead class="table-dark">
  <tr>
            <th>id venta</th>
            <th>id usuario</th>
            <th>id producto</th>
            <th>Cantidad</th>
            <th>Total</th>
            <th>accion</th>
            
    </tr>
  </thead>
  <tbody>
  @foreach( $datos_b as $datos)
        <tr>
            
            <td>{{ $datos->id_devolucion}}</td>
            <td>{{ $datos->id_usuario}}</td>
            <td>{{ $datos->id_producto}}</td>
            <td>{{ $datos->id_venta}}</td>
            <td>{{ $datos->fecha}}</td>
            <td>{{ $datos->motivo}}</td>
            <td>{{ $datos->respuesta}}</td>
       
            
           
            
            <td>
                <a type="button"  href="{{ url('/ventas/'.$datos->id_venta.'/edit') }}">  Editar</a>

                <form action="{{ url('/ventas/'.$datos->id_venta) }}" method="post">
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
<a href="{{ url('/devoluciones/create')}}" target="_blank" class="btn btn-main " >Registrar nueva devolucion <i class="ti-angle-right ml-3"></i></a>
</div>

@include('scripts')    
</body>
</html>


