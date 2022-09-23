<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";
$mi_var= $_POST["base"];

$tabla= $_POST["tabla"];
$dato1= $_POST["columna1"];
$dato2= $_POST["columna2"];
$dato3= $_POST["columna3"];
$dato4= $_POST["columna4"];

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$mi_var);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error().')' .mysqlo_connect_error());
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "CREATE TABLE $tabla(
    id_persona INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ci INT(6) NOT NULL,
    nombre VARCHAR(12),
    apellidoP VARCHAR(12)
)";
