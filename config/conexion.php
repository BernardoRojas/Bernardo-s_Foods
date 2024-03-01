<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursodb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname  );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
/*
$sql = "SELECT * FROM datospersonales;";
$resultado = $conn->query($sql);
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NOMBRE"] . "</td> <td> " . $row["APELLIDO"] . "</td> </tr> ";
    }
    


$conn->close();
*/
?>