<?php
require_once('../config/conexion.php');
$nombrep = $_POST['nombrep'];
$precio = $_POST['preciop'];
$sql = "INSERT INTO PRODUCTO(NOMBRRE, PRECIO)
VALUES ('$nombrep', $precio)";
$resultado = $conn->query($sql);
echo "Se ha guardado exitosamente!!!";
$conn->close();
?>