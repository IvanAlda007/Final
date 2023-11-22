<?php
$conexion = new mysqli("localhost", "root", "", "registrados");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset($_POST['registro'])) {
    $nombre_usu = $_POST['nombre_usu'];
    $correo_usu = $_POST['correo_usu'];
    $usuario_usu = $_POST['usuario_usu'];
    $password_usu = $_POST['password_usu'];

    // Encripta la contraseña
    $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);

    // Prepara la consulta SQL usando sentencias preparadas
    $query = "INSERT INTO usuario (nombre_usu, correo_usu, usuario_usu, password_usu) VALUES (?, ?, ?, ?)";
    
    $stmt = $conexion->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ssss", $nombre_usu, $correo_usu, $usuario_usu, $enc_password_usu);
        $stmt->execute();

        if ($stmt->affected_rows == 1) {
            // Redirige a la página deseada
            header('Location: exito.php');
            exit();
        } else {
            die("Error al insertar en la base de datos: " . $stmt->error);
        }

        $stmt->close();
    } else {
        die("Error en la preparación de la consulta: " . $conexion->error);
    }
}

$conexion->close();
?>
