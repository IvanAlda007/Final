<?php
session_start();
include('conexion.php');

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    function validar($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario_usu = validar($_POST['usuario']);
    $password_usu = validar($_POST['clave']);

    // Evitar la inyección SQL utilizando sentencias preparadas
    $sql = "SELECT * FROM usuario WHERE usuario_usu = ? AND password_usu = ?";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $usuario_usu, $password_usu);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) === 1) {
            $row = mysqli_fetch_assoc($stmt);

            // En este momento se generan las variables
            $_SESSION['usuario'] = $row['usuario_usu'];
            $_SESSION['clave'] = $row['password_usu'];

            header("Location: index.html");
            exit();
        } else {
            header("Location: iniciarsesion.php?error=El usuario o la clave no corresponden");
            exit();
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error en la preparación de la consulta: " . mysqli_error($conexion);
    }
} else {
    header("Location: iniciarsesion.php?error=El usuario o la clave no corresponden");
    exit();
}
?>
