<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nuevo Tarjeta</title>
</head>

<body>

    @include('headeradmin')



    <div>
        <h3 style="text-align:center" class="mt-3"></h3>
        <form action="{{ url('/tarjetas') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                @include('tarjetas.form')
                <div>
                    <button type="submit" class="botton-agileits">
                        <h3>Crear Tarjeta de usuario</h3>
                    </button>
                </div>
            </div>
        </form>
    </div>

    @include('scripts')
</body>

</html>