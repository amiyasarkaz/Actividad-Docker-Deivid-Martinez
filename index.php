<?php
$mysqli = @new mysqli('db', 'root', 'rootpass', 'demo');
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
    
}
$result = $mysqli->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . " - " . $row['nombre'] . "<br>";
}
?>
