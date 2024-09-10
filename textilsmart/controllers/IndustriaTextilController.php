<?php
require_once 'repositories/IndustriaTextilRepository.php';

class IndustriaTextilController {
    private $repository;

    public function __construct($repository) {
        $this->repository = $repository;
    }

    public function index() {
        $industriaTextiles = $this->repository->findAll();
        require 'views/industria_textil/index.php';
    }
}
?>
