<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/logIn.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/b9428a05a6.js" crossorigin="anonymous"></script>
        <title>Inicio de sesion</title>
    </head>
    <body>
        <header>
            <nav>
                <a href="servicios.html"><p>Servicios</p></a>
                <a href="acerca.html"><p>Acerca de</p></a>
                <a href="index.html"><img class="logo" src="img/LogoEmpresa.png" title="Inicio"></a>
                <a href="#"><p>log In</p></a>
                <a href="registro.php"><p>Registrarse</p></a>
            </nav>
        </header>
        <form action="iniciarsesion.php" method="post">
            <h1>inicio de sesi&oacute;n</h1>
            <?php
                if(isset($_GET['error'])){
            ?>

            <p id="error">
            <?php
                echo $_GET['error']
            ?>
            </p>
            <?php
                }
            ?>
            <br>

            <i class="fa-solid fa-user"></i>
            <label>Usuario</label>
            <input type="text" name="Usuario" placeholder="Nombre del Usuario">

            <i class="fa-solid fa-unlock"></i>
            <label>Clave</label>
            <input type="password" name="Clave" placeholder="Clave">

            <button type="submit">Iniciar sesion</button>
            <a href="registro.php">Crear Cuenta</a>
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