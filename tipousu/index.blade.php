
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Usuarios</title>
</head>
<body>
@include('headeradmin')


<table class="table">
  <thead class="table-dark">
  <tr>
            <th>id tipo usuario</th>
            <th>rol</th>
            <th>accion</th>
            
    </tr>
  </thead>
  <tbody>
  @foreach( $datos_b as $datos)
        <tr>
            
            <td>{{ $datos->id_tipo_usu}}</td>
            <td>{{ $datos->rol}}</td>

       
            
           
            
            <td>
                <a type="button"  href="{{ url('/tipos/'.$datos->id_tipo_usu.'/edit') }}">  Editar</a>

                <form action="{{ url('/tipos/'.$datos->id_tipo_usu) }}" method="post">
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
<a href="{{ url('/tipos/create')}}" target="_blank" class="botton-agileits" >Registrar nuevo Tipo usuario <i class="ti-angle-right ml-3"></i></a>
</div>

@include('scripts')    
</body>
</html>


