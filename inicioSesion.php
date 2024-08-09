<?php
//Lo primero que tenemos que hacer es iniciar una sesión
session_start();

$mensaje = "";

$usuario = $_POST["usuario"];
$password = $_POST["password"];

if(empty($usuario) || empty($password)){
    enviarMensajeError("Debe introducir usuario y contrasena para poder acceder<br>");
}else{
    if(validarUsuario($usuario, $password)){
        //Al ser un login correcto creamos la variable de sesión y redirigimos a la página salida
        $_SESSION["user"] = $usuario;
        $_SESSION["apellidos"] = "Lopez Cano";
        header("Location: salida.php");
    }else{
        enviarMensajeError( "Inicio de sesion incorrecto<br>");
    }
}

function validarUsuario($usuario, $password){

    $login = ["Dani"=>"1234","Irina"=>"1234", "Random"=>"1234"];

    if(array_key_exists($usuario, $login)){
        if($login[$usuario] == $password){
            return true;
        }else{
            return false;
        }
    }
}

function enviarMensajeError($mensaje){
    header('Location: index.php?mensaje='.$mensaje);
}