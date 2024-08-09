<?php
    session_start();
    if(isset($_SESSION["user"])){
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salida</title>
    <link rel="stylesheet" href="css/salidaStyle.css">
</head>
<body>
<!-- Cuando vas a imprimir una variable se puede poner "< ? =" en lugar de poner php y el echo-->
    <div class="divUser"><p>Hola <?= $_SESSION["user"]."<br>"; ?></p></div>
    <div class="divBienvenida"><h1>Bienvenido a nuestra aplicación WEB</h1></div>


</body>
</html>

<?php
    }else{
        header("Location: index.php?mensaje=No tiene permiso para acceder a esta pagina, inicia sesion.");
    }