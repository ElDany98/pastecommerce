<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nuevo Usuario</title>
</head>

<body>

    @include('header')



    <div>
        <h3 style="text-align:center" class="mt-3"></h3>
        <form action="{{ url('/usuario') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                @include('users.form')
                <div>
                    <button type="submit" class="botton-agileits">
                        <h3>Crear Usuario</h3>
                    </button>
                </div>
            </div>
        </form>
    </div>

    @include('scripts')
</body>

</html>