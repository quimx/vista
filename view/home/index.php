<?php include('view/header.php'); ?>
<title>Home</title>
<h3>Listagem de tarefas</h3>
<br />
<a class="btn btn-primary btn-sm" href="/lista/cadastrar">+ Incluir Tarefa</a>
<a class="btn btn-primary btn-sm" href="/lista/finalizado">Tarefas Finalizadas</a>
<hr>
<?php if(!empty($arrLista)): ?>
<table>
    <tr style="color: lightgray; font-size: 12px">
        <th>Ações</th>
        <th style="padding-left: 10px">Data Limite</th>
        <th style="padding-left: 10px">Descrição</th>
    </tr>
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
<?php endif;?>
<?php include('view/footer.php'); ?>