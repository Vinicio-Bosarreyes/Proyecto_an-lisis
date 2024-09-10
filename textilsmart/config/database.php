<?php
$servername = "LAPTOP-A1J4FIFB"; // O usa la IP del servidor SQL
$database = "industria_textil";
$username = "sistemas1";
$password = "sistemas";
$conn;
try {
    $conn = new PDO("sqlsrv:server=$servername;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
