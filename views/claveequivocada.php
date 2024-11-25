<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CLAVE EQUIVOCADA, VUELVA A INGRESAR </h1>
    <br>
    <br>
    <a href="<?php echo get_urlBase('index.php')?>">volver al login</a>
</body>
</html>