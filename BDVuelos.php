<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'user_johan', '', 'vuelo5');

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos del formulario
$operador = $_POST['operador'];
$subOperador = $_POST['subOperador'];
$matricula = $_POST['matricula'];
$empresa = $_POST['empresa'];
$precio = $_POST['precio'];
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fechaSalida = $_POST['fechaSalida'];
$fechaLlegada = $_POST['fechaLlegada'];
$hora = $_POST['hora'];
$horario = $_POST['horario'];
$tipoVuelo = $_POST['tipoVuelo'];
$modoVuelo = $_POST['modoVuelo'];

// Insertar datos en la tabla vuelos
$sql = "INSERT INTO vuelos (Operador, SubOperador, Matricula, Empresa, Precio, Origen, Destino, FechaSalida, FechaLlegada, Hora, Horario, TipoVuelo, ModoVuelo)
        VALUES ('$operador', '$subOperador', '$matricula', '$empresa', '$precio', '$origen', '$destino', '$fechaSalida', '$fechaLlegada', '$hora', '$horario', '$tipoVuelo', '$modoVuelo')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Vuelo creado exitosamente'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
