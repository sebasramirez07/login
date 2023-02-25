<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>

<body>
    <main>
        <form action="validar.php" method="post">
            <h1 class="h1">BIENVENIDO</h1>
            <img class="imagen" src="img/imagen.svg.png" alt="imagen">
            <div class="login">
                <p class="p1">USUARIO <br><input type="text" placeholder="Ingrese su usuario" name="usuario"></p>
                <p class="p2">CONTRASEÑA <br> <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
                <input class="boton1" type="submit" value="INGRESAR">
                <input class="boton2" type="button" value="REGISTRAR">
            </div>
            
        </form>
    </main>
    <footer class="footer">
        
    </footer>
</body>

</html>