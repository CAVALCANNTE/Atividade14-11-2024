<html>
<head>
    <title>Relatório de Teclados</title>
</head>
<body>
    <h1>Relatório de Teclados</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço (R$)</th>
                <th>Estoque</th>
                <th>Data de Adição</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teclados as $teclado): ?>
                <tr>
                    <td><?= $teclado['id'] ?></td>
                    <td><?= $teclado['nome'] ?></td>
                    <td><?= $teclado['descricao'] ?></td>
                    <td><?= number_format($teclado['preco'], 2, ',', '.') ?></td>
                    <td><?= $teclado['estoque'] ?></td>
                    <td><?= date('d/m/Y', strtotime($teclado['data_adicao'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
