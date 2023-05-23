<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enviar Queja</title>
</head>

<body>

    @include('header')

    <div>
        <h1 style="text-align:center" class="mt-3">Enviar queja</h1>
        <form action="{{ url('/quejas') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                @include('quejas.form')
                <div>
                    <button type="submit" class="botton-agileits">
                        <h3>Enviar Queja </h3>
                    </button>
                </div>
            </div>
        </form>
    </div>

    @include('scripts')
</body>

</html>