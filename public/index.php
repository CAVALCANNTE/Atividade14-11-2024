<?php
require_once __DIR__ . '/../app/controllers/ProdutoController.php';

$controller = new ProdutoController();
$controller->gerarRelatorio();
?>
