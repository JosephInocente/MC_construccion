<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if (isset($_SESSION["favcolor"] )) {

// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

} else
{
    echo "NO EXISTEN VARIABLES ";
    echo "<br>";
}


?>

<br>
PAGINA DE VER VARIABLES
<br>

<a href="http://127.0.0.1/sistema/test/vervariables.php">actualizar la pagina</a>
<a href="http://127.0.0.1/sistema/test/borrarvariables.php">limpiar las variables</a>

</body>
</html>