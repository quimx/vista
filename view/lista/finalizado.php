<?php include('view/header.php'); ?>
<title>Tarefas Finalizadas</title>
<h3>Listagem de tarefas finalizadas</h3>

<br />
<table>
        <tr style="color: lightgray; font-size: 12px">
            <th>Criado em</th>
            <th style="padding-left: 10px">Data Limite</th>
            <th style="padding-left: 10px">Finalizado em</th>
            <th style="padding-left: 10px">Descrição</th>
        </tr>
    <?php foreach ($arrFinalizado as $finalizado): ?>
        <tr>
            <td>
                <b><?=date('d/m/Y', strtotime($finalizado['lis_cadastrado_em']))?></b>
            </td>
            <td style="padding-left: 10px">
                <b><?=date('d/m/Y', strtotime($finalizado['lis_data_limite']))?></b>
            </td>
            <td style="padding-left: 10px">
                <b><?=date('d/m/Y', strtotime($finalizado['lis_finalizado_em']))?></b>
            </td>
            <td style="padding-left: 10px">
                <div id="tarefa"><?=$finalizado['lis_descricao']?></div>
            </td>
        </tr>
    <?php endforeach?>
</table>
<br />
<a class="btn btn-primary btn-sm" href="/">< Voltar</a>
<?php include('view/footer.php'); ?>
