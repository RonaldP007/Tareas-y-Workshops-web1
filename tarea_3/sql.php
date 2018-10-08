<?php
if ($argc < 7) {
    echo "No cumple con los parametros necesarios";
    exit;
}

$host = $argv[4];      //"localhost";
$user = $argv[1];      //"admin";
$password = $argv[2];  //12345;
$database = $argv[3];  //"prueba";
$tabla = $argv[5];     //"informacion";
$csv = $argv[6];       //"copia.csv";

// Create connection
$conn = new mysqli($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $tabla";
$result = $conn->query($sql);
$archivo_csv = fopen($csv, "w");

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo $row["cedula"]. "," . $row["nombre"]. "," . $row["direccion"]."," . $row["edad"]. "<br>";
       fwrite($archivo_csv, $row["cedula"]. "," . $row["nombre"]. "," . $row["direccion"]."," . $row["edad"]. "\r\n");
    }
}else {
    echo "0 results";
}
$conn->close();
//$archivo_csv->close();