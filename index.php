<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Bienvenido al Login</h1>
    <form action="inicioSesion.php" method="post">
        <p>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">
        </p>
        <p>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>
    <?php
        if(!empty($_GET["mensaje"])){
            echo $_GET["mensaje"];
        }
    ?>
</body>
</html>
