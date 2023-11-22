<?php require 'controlador.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b9428a05a6.js" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>
<body>
    <header>
        <nav>
            <a href="servicios.html"><p>Servicios</p></a>
            <a href="acerca.html"><p>Acerca de</p></a>
            <a href="index.html"><img class="logo" src="img/LogoEmpresa.png" title="Inicio"></a>
            <a href="LogIn.php"><p>Log In</p></a>
            <a href="#"><p>Registrarse</p></a>
        </nav>
    </header>


    <form action="" method="post" autocomplete="off" id="Registro">
        <h1>Registro de Usuarios</h1>

        <label for="nombre_usu">Nombre</label>
        <input type="text" name="nombre_usu" pattern="[A-Za-z ]+" minlength="2" maxlength="50" required>

        <label for="correo_usu">Correo</label>
        <input type="text" name="correo_usu" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" maxlength="35" required>

        <label for="usuario_usu">Usuario</label>
        <input type="text" name="usuario_usu" pattern="[A-Za-z0-9]+" minlength="4" maxlength="25" required>

        <label for="password_usu">Password</label>
        <input type="password" name="password_usu" pattern="[A-Za-z0-9]+" minlength="6" maxlength="30" required>

        <button type="submit" name="registro">Registro</button>

        <a id="iniciar" href="LogIn.php">iniciar sesi&oacute;n</a>
        
    </form>

    <a href="index.html" class="volver-inicio"><i class="fa-solid fa-arrow-left"></i></a>

    <footer>
        <div class="redes-sociales">
            <a href="#"><img src="img/fac.png"></a>
            <a href="#"><img src="img/twi.png"></a>
            <a href="#"><img src="img/ins.png"></a>
            <a href="#"><img src="img/lin.png"></a>
            <a href="#" id="you"><img src="img/you.jpg"></a>
        </div>
        <p id="empresa">&copy; 2023 InkSoul Studios</p>
        <p id="contacto">Contacto: &#40;656&#41; 123-4567<br>inksoul@gmail.com</p>
    </footer>        
</body>
</html>