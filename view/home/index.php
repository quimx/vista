<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php include('view/header.php'); ?>
<body>
    <div class="container">
        <h1>Home</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Descrição</th>
                    <th>Data Limite</th>
                    <th>Data Cadastro</th>
                    <th>Data Finalizado</th>
                    <th>Status</th>
                </tr>
            </thead>
        <?php
        foreach ($arrLista as $lista): ?>
            <tr>
                <td><?=$lista['lis_id'] ?></td>
                <td><?=$lista['lis_descricao']?></td>
                <td><?=$lista['lis_data_limite']?></td>
                <td><?=$lista['lis_cadastrado_em']?></td>
                <td><?=$lista['lis_finalizado_em']?></td>
                <td><?=$lista['lis_status']?></td>
            </tr>
        <?php endforeach?>
        </table>
    </div>
</body>
</html>