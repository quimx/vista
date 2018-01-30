<?php include('view/header.php'); ?>
<title>Home</title>
<h3>Listagem de tarefas</h3>
<br />
<a id="incluir" href="/lista/cadastrar">+ Incluir Tarefa</a>
<hr>
<table>
<?php foreach ($arrLista as $lista): ?>
    <tr>
        <td>
            <div class="btn-group" role="group" aria-label="Actions">
                <a href="/lista/finalizar/<?=$lista['lis_id']?>" class="btn btn-success btn-sm">Finalizar</a>
                <a href="/lista/editar/<?=$lista['lis_id']?>" class="btn btn-info btn-sm">Editar</a>
                <a href="/lista/remover/<?=$lista['lis_id']?>" class="btn btn-danger btn-sm">Remover</a>
            </div>
        </td>
        <td style="padding-left: 10px">
            <b><?=date('d/m/Y', strtotime($lista['lis_data_limite']))?></b>
        </td>
        <td style="padding-left: 10px">
            <div id="tarefa"><?=$lista['lis_descricao']?></div>
        </td>
    </tr>
<?php endforeach?>
</table>
<?php include('view/footer.php'); ?>