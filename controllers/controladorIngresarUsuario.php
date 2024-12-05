<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}




require_once $_SERVER['DOCUMENT_ROOT'] . '/models/modeloUsuario.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/views/vistaingresarUsuario.php';


if (!isset($_SESSION["txtusername"])) {
    header('location: ' . get_UrlBase('index.php'));
}


$mensaje = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tmpdatusuario = $_POST["datusuario"];
    $tmpdatpassword = $_POST["datpassword"];
    $tmpdatperfil = $_POST["datperfil"];



    $modeloUsuario = new modeloUsuario();

    try {

        $modeloUsuario->insertarUsuarios($tmpdatusuario, $tmpdatpassword, $tmpdatperfil);
        $mensaje = "USUARIO RESGISTRADO CON EXITO <br>";
    } catch (PDOException $e) {
        $mensaje = "Error al registrar el usuario ...<br>" . $e->getMessage();
    }
    
    //echo $mensaje;
    //exit(); // cortar la ejecucion
}

mostrarFormularioIngreso($mensaje);