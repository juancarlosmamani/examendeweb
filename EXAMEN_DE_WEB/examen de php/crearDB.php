<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";
$mi_var= $_POST["base"];
//creando la conexion
$conn = new mysqli($servername, $username, $password,);

//Verificando la conexión
if ($conn->connect_error){
    die("Falló de la conexión: "  .$conn->connect_error);

}
echo "Conexión correcta";

//Consulta para crear base de datos

$sql = "CREATE DATABASE $mi_var";
if ($conn->query($sql) === TRUE){
    echo "Base de datos creada correctamente";
}else{
    echo "Error al crear: "  .$conn->error;
}

$conn->close();
?>



