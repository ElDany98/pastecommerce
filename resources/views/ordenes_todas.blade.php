<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="jquery.js"></script>
    <script>
        $(function() {
            var includes = $('[data-include]')
            $.each(includes, function() {
                var file = '/resources/views/' + $(this).data('include') + '.blade.php'
                $(this).load(file)
            })
        })
    </script>

</head>
@csrf

<body>
    @include('header')
    <div class="ms-4 mt-2">
        <div class="label col-auto ms-5">
            <h4>Todas las órdenes</h4>
            <p> Ver todas las órdenes de compra; registrar el servicio de paquetería, número de guía, fecha
                de envío y fecha de entrega para cada órden de compra que no ha sido enviada</p>
            </h6>
        </div>
    </div>
    <table
        class="table table-striped table-hover border rounded translate-middle>
        <thead>
            <tr>
                <th scope="col">
        Id. de orden</th>
        <th scope="col">No. de guía</th>
        <th scope="col">Servicio de paquetería</th>
        <th scope="col">Fecha de envío</th>
        <th scope="col">Estatus</th>
        <th scope="col">Añadir datos</th>
        <th scope="col">Seleccionar</th>


        </tr>
        </thead>
        <tbody class="table-group-divider">

            <tr>
                <th scope="row">AH-901321L</th>
                <td>DHL-94122</td>
                <td>DHL</td>
                <td>10/10/2023</td>
                <td>No enviado</td>
                <td><a class="btn btn-primary" href="#" role="button">Agregar</a>
                </td>
                <td class="justify-content-center">
                    <div class="form-check justify-content-center">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </td>
            </tr>

            <tr>
                <th scope="row">AH-245641L</th>
                <td>DHL-94122</td>
                <td>DHL</td>
                <td>10/10/2023</td>
                <td>No enviado</td>
                <td><a class="btn btn-primary" href="#" role="button">Agregar</a>
                </td>
                <td class="justify-content-center">
                    <div class="form-check justify-content-center">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">AH-39492L</th>
                <td>DHL-94122</td>
                <td>DHL</td>
                <td>10/10/2023</td>
                <td>No enviado</td>
                <td><a class="btn btn-primary" href="#" role="button">Agregar</a>
                </td>
                <td class="justify-content-center">
                    <div class="form-check justify-content-center">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    {{-- <div class="container-fluid ms-5 mt-4">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
                Selección personalizada
            </label>
        </div>
        <div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Seleccionar todos
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class="form-check-label" for="flexRadioDefault3">
                    Seleccionar ninguno
                </label>
            </div>

            <button type="button" class="btn btn-outline-primary mt-2">Enviar seleccionados</button>
            <a role="button" href="{{ url('/contenido') }}" class="btn btn-outline-primary mt-2">Enviar
                seleccionados</a>

     </div> --}}

</body>
@include('footer')

</html>
