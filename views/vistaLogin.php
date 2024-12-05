<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo get_urlBase('css/styles.css') ?>">
</head>

<body>

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
                <form action="/controllers/controladorLogin.php" method="POST" class="login-form">
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