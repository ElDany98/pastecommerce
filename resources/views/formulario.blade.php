<!DOCTYPE html>
<html lang="es">

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

<body>
    @include('header')

    <div class="container mt-3">
        <div class="label col-auto">
            <h4>Registro de orden de compra</h4>
            <h5>Registrar el servicio de paquetería, número de guía y fecha de envío para cada órden de compra</h5>
        </div>
        <form action="order" method="POST">
            @csrf
            <div class="row g-3 align-items-center">

                <div class="col-auto">
                    <div>
                        <label for="inputPassword6" class="col-form-label">Id. de orden</label>
                        <input id="id_producto" class="form-control" aria-labelledby="passwordHelp">
                        <span id="passwordHelp" class="form-text">
                            Debe tener 10 caracteres.
                        </span>
                    </div>
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Id. de productos</label>
                    <input id="id_producto" class="form-control" aria-labelledby="passwordHelp">
                    <span id="passwordHelp" class="form-text">
                        <span id="passwordHelp" class="form-text">
                            Debe tener 10 caracteres.
                        </span>
                    </span>
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Servicio de paquetería</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Elige una opción</option>
                        <option value="1">DHL</option>
                        <option value="2">Estafeta</option>
                        <option value="3">FedEx</option>
                        <option value="4">UPS</option>
                    </select>
                    <span id="passwordHelp" class="form-text">
                        Selecciona el proveedor del servicio.
                    </span>
                </div>
                <!--Aniadir formato de estados-->
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Destino</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Elige una opción</option>
                        <option value="1">Aguascalientes</option>
                        <option value="2">Baja Carlifornia</option>
                        <option value="3">Baja California Sur</option>
                        <option value="4">Campeche</option>
                        <option value="5">Ciuda de México</option>
                        <option value="6">Chiapas</option>
                        <option value="7">Chihuahua</option>
                        <option value="8">Coahuila</option>
                        <option value="9">Colima</option>
                        <option value="10">Durango</option>
                        <option value="11">Guanajuato</option>
                        <option value="12">Guerrero</option>
                        <option value="13">Hidalgo</option>
                        <option value="14">Jalisco</option>
                        <option value="15">México</option>
                        <option value="16">Michoacán</option>
                        <option value="17">Morelos</option>
                        <option value="18">Nayarit</option>
                        <option value="19">Nuevo León</option>
                        <option value="20">Oaxaca</option>
                        <option value="21">Puebla</option>
                        <option value="22">Querétaro</option>
                        <option value="23">Quintana Roo</option>
                        <option value="24">San Luis Potosí</option>
                        <option value="25">Sinaloa</option>
                        <option value="26">Sonora</option>
                        <option value="27">Tabasco</option>
                        <option value="28">Tamaulipas</option>
                        <option value="29">Tlaxcala</option>
                        <option value="30">Veracruz</option>
                        <option value="31">Yucatán</option>
                        <option value="832">Zacatecas</option>
                    </select>
                    <span id="passwordHelp" class="form-text">
                        Selecciona el estado de destino.
                    </span>
                </div>
            </div>

            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Número de guía</label>
                    <input id="id_producto" class="form-control" aria-labelledby="passwordHelp">
                    <span id="passwordHelp" class="form-text">
                        Debe tener 10 caracteres.
                    </span>
                </div>
                <div class="col-auto mt-">
                    <label for="startDate">Fecha de envío</label>
                    <input id="startDate" class="form-control" type="date" />
                    <span id="passwordHelp" class="form-text">
                        Fecha en la que se enviará el paquete.
                    </span>
                </div>
                <div class="col-auto mt-">
                    <label for="startDate">Fecha de entrga</label>
                    <input id="startDate" class="form-control" type="date" />
                    <span id="passwordHelp" class="form-text">
                        Fecha estimada de llegada.
                    </span>
                </div>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Registrar">


        </form>
    </div>
</body>


</html>
