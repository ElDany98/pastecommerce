
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
@include('headeradmin')


<table class="table">
  <thead class="table-dark">
  <tr>
            <th>id categoria</th>
            <th>nombre</th>
            <th>acciones</th>
            
    </tr>
  </thead>
  <tbody>
  
  @foreach( $datos_b as $datos)
        <tr>
            
            <td>{{ $datos->id_categoria}}</td>
            <td>{{ $datos->nombre}}</td>
                        
            <td>
                <a type="button"  href="{{ url('/cateogoria/'.$datos->id_categoria.'/edit') }}">  Editar</a>

                <form action="{{ url('/categoria/'.$datos->id_categoria) }}" method="post">
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
<a href="{{ url('/categoria/create')}}" target="_blank" class="btn btn-main " >Registrar nueva categoria <i class="ti-angle-right ml-3"></i></a>
</div>

@include('scripts')    
</body>
</html>


