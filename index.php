<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo get_urlBase('css/styles.css') ?>">
</head>

<body>
    <?php echo get_urlBase('css/styles.css') ?>
    <?php
    session_start();
    if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        
        //echo "<br>";
        //echo "SE ENVIARON LAS SIGUIENTES VARIABLES ";
        //echo "<br>";
        //echo $_POST["txtusername"];
        //echo "<br>";
        //echo $_POST["txtpassword"]; 

        $v_username = "";
        $v_password = "";
        if (isset( $_POST["txtusername"] )) {
            $v_username = $_POST["txtusername"];
        }

        if (isset( $_POST["txtpassword"] )) {
            $v_password = $_POST["txtpassword"];            
        }

        if ( ($v_username == "admin") && ($v_password == "1234") ) {
            $_SESSION["txtusername"]=$v_username;
            $_SESSION["txtpassword"]=$v_password; 
            header('Location: '.get_views('dashboard.php'));
            //echo "dashboard";
        } else {
            header('Location: '.get_views('claveequivocada.php'));
            //echo "Error en clave";
        }
    }

    //en caso de que el usuario presione directamente sobre la url inicial
    if (isset( $_SESSION["txtusername"] )) {
        header('Location: '.get_views('dashboard.php'));
    }
    ?>

    <div class="login-container">
        <div class="login-header">
            <div class="icon-shield-large"></div>
            <h2 class="login-title">Login</h2>
            <div class="icon-lock"></div>
        </div>
        <div class="login-content">
            <!-- Contenedor de la izquierda -->
            <div class="left-panel">
                <div class="empty-space"></div>
                <div class="empty-space"></div>
                <div class="empty-space"></div>
                
                <div class="icon-shield-small"></div>
            </div>
            <!-- Contenedor de la derecha (formulario) -->
            <div class="right-panel">
                <form action="" method="POST" class="login-form">
                    <div class="input-group">
                        <label for="username1"></label>
                        <input type="text" id="txtusername" placeholder="Username" name="txtusername" required autocomplete="off">
                        <div class="input-icon user-icon"></div>
                    </div>
                    <div class="input-group">
                        <label for="password1"></label>
                        <input type="password" id="txtpassword" placeholder="Password" name="txtpassword" required autocomplete="off">
                        <div class="input-icon lock-icon"></div>
                    </div>
                    <div class="remember-group">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember</label>
                    </div>
                    <button type="submit" class="login-button">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

