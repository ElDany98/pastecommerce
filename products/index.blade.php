
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
@include('headeradmin')


<table class="table">
  <thead class="table-dark">
  <tr>
            <th>id producto</th>
            <th>nombre</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>foto</th>
            <th>acciones</th>
            
    </tr>
  </thead>
  <tbody>
  
  @foreach( $datos_b as $datos)
        <tr>
            
            <td>{{ $datos->id_producto}}</td>
            <td>{{ $datos->nombre}}</td>
            <td>{{ $datos->descripcion}}</td>
            <td>{{ $datos->precio}}</td>
            
            <td><img src="{{ asset('storage').'/'.$datos->foto}}" alt="" style="width: 100px; height: 100px;"></td>
       
            
           
            
            <td>
                <a type="button"  href="{{ url('/productos/'.$datos->id_producto.'/edit') }}">  Editar</a>

                <form action="{{ url('/productos/'.$datos->id_producto) }}" method="post">
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
<a href="{{ url('/productos/create')}}" target="_blank" class="btn btn-main " >Registrar nuevo producto <i class="ti-angle-right ml-3"></i></a>
</div>

@include('scripts')    
</body>
</html>


