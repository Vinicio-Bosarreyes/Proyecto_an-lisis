<?php
require_once 'config/database.php';
require_once 'repositories/IndustriaTextilRepository.php';
require_once 'controllers/IndustriaTextilController.php';

if (!isset($conn)) {
    die("No se pudo establecer la conexión a la base de datos.");
}
$repository = new IndustriaTextilRepository($conn);
$controller = new IndustriaTextilController($repository);

$controller->index();
?>
