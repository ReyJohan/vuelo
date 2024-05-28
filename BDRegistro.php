<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];
    $genero = $_POST['genero'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Verificar si las contraseñas coinciden
    if ($password !== $confirm_password) {
        echo "<script>alert('Las contraseñas no coinciden.'); window.location.href='register.php';</script>";
        exit();
    }

    // Sanitizar los datos
    $nombre = $conexion->real_escape_string($nombre);
    $apellidos = $conexion->real_escape_string($apellidos);
    $usuario = $conexion->real_escape_string($usuario);
    $email = $conexion->real_escape_string($email);
    $cargo = $conexion->real_escape_string($cargo);
    $genero = $conexion->real_escape_string($genero);
    $password = $conexion->real_escape_string($password);

    // Insertar los datos
    $sql = "INSERT INTO usuarios (nombre, apellidos, usuario, email, cargo, genero, password) VALUES ('$nombre', '$apellidos', '$usuario', '$email', '$cargo', '$genero', '$password')";

    if (mysqli_query($conexion, $sql)) {
        echo "<script>alert('Registro exitoso.'); window.location.href='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
    $conexion->close();
}
?>
