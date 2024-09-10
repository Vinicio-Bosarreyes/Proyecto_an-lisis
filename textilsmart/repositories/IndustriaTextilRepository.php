<?php
require_once 'config/database.php';
require_once 'models/IndustriaTextil.php';

class IndustriaTextilRepository {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function findAll() {
        $stmt = $this->conn->prepare("SELECT * FROM industria_textil");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $industriaTextiles = [];
        foreach ($result as $row) {
            $industriaTextiles[] = new IndustriaTextil($row['id'], $row['nombre'], $row['descripcion']);
        }

        return $industriaTextiles;
    }

    // Puedes agregar métodos adicionales para crear, actualizar y eliminar registros
}
?>
