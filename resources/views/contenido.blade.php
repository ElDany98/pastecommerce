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
@include('header')

<body>

    <div class="container">
        <h1 class="mt-5">Bienvenido, Emiliano.</h1>
        <p class="lead">Paquetería, órdenes de compra y envíos.</p>
        <!--<p>Back to <a href="../examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>-->
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex flex-column h-50">
                    <div class="card-group gap-4">
                        <div class="card rounded">
                            <img src="{{ asset('img/cajas.jfif') }}" class="card-img-top object-fit-none h-25"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Todas las órdenes</h5>
                                <p class="card-text">Ver las las órdenes completadas y las órdenes en proceso.
                                    Registrar los
                                    datos
                                    de las órdenes en proceso.</p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="{{ url('/todas_ord') }}" role="button">Ver</a>
                                <div></div>
                                <small class="text-body-secondary">Visto hace 3 hrs</small>
                            </div>
                        </div>
                        <div class="card border-start rounded">
                            <img src="{{ asset('img/keyb.png') }}" class="card-img-top object-fit-fill h-25"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Registrar órden</h5>
                                <p class="card-text">Registrar y envía una órden nueva rápidamente.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="{{ url('/formulario') }}" role="button">Ir</a>
                                <div></div>
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card border-start rounded">
                            <img src="{{ asset('img/carre.jpg') }}" class="card-img-top object-fit-fill h-25"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Rastrear</h5>
                                <p class="card-text">Buscar un paquete por número de guía para visualizar con mayor
                                    detalle
                                    su
                                    estatus.
                                </p>
                            </div>

                            <div class="card-footer">
                                <a class="btn btn-primary" href="{{ url('/rastreo') }}" role="button">Ver</a>
                                <div></div>
                                <small class="text-body-secondary">Visitado hace 10 minutos</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
@include('footer')

</html>
