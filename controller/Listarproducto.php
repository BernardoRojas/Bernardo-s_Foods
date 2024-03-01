<?php
require_once('../config/conexion.php');
$sql = "SELECT * FROM PRODUCTO";
$resultado = $conn->query($sql);
$tr = "";
    while ($row = $resultado->fetch_assoc()) {
        $tr .="<tr><td>" . $row["ID"] . "</td><td>" . $row["NOMBRRE"] . "</td> <td> " . $row["PRECIO"] . "</td> </tr> ";
        // "<tr><td>" . $row["ID"] . "</td><td>" . $row["NOMBRE"] . "</td> <td> " . $row["APELLIDO"] . "</td> </tr> ";
    }
$conn->close();
echo $tr;
?>