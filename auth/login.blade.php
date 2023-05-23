
<!DOCTYPE html>
<html lang="zxx">
<head>
@include('headerlogin')
@include('scripts')


    <h1 class="panel-title">Ingresar al sistema</h1>
    <form role="form" action="/login" method="post">
        <fieldset>
            <input placeholder="Nombre de usuario" name="username" type="text" autofocus>
            <input placeholder="Password" name="password" type="password" value="">
            
        </fieldset>
    </form>
    <a href=" {{ url('/home')}} " >Ingresar</a>
    <a href=" {{ url('/usuario/createA')}} ">Registrarse</a>



@include('footer')
</body>
</html>
