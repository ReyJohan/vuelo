<?php
session_start();

// Conexión a la base de datos
$conn = new mysqli('localhost', 'user_johan', '', 'vuelo5');

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

// Consultar en la base de datos
$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener datos del usuario
    $row = $result->fetch_assoc();
    $_SESSION['usuario'] = $row['usuario'];
    $_SESSION['cargo'] = $row['cargo']; // Usando la columna 'cargo' para determinar el rol
    
    if ($row['cargo'] == 'administrador') {
        echo "<script>alert('Inicio de sesión exitoso. Bienvenido administrador'); window.location.href='formulario_vuelos.php';</script>";
    } else {
        echo "<script>alert('Inicio de sesión exitoso.'); window.location.href='pagina_principal.php';</script>"; // Cambia a la página principal que desees para otros cargos
    }
} else {
    echo "<script>alert('Usuario o contraseña incorrectos.'); window.location.href='login.php';</script>";
}

$conn->close();
?>
