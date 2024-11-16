<?php
require_once __DIR__ . '/../models/Produto.php';
require_once __DIR__ . '/../../vendor/autoload.php';

class ProdutoController {
    public function gerarRelatorio() {
        $produtoModel = new Produto();
        $teclados = $produtoModel->getTeclados();

        ob_start();
        require_once __DIR__ . '/../views/relatorio_teclados.php';
        $html = ob_get_clean();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output('relatorio_teclados.pdf', 'I');
    }
}
?>
