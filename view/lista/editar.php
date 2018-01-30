<?php include('view/header.php'); ?>
    <title>Incluir tarefa</title>
    <h3>Listagem de tarefas</h3>
    <br />
    <h5>Alterar tarefa</h5>
    <br />
    <form action="/lista/editar" method="post">
        <div class="form-group">
            <label for="tarefa">Tarefa</label>
            <input type="text" maxlength="120" class="form-control col-sm-6" name="tarefa" required value="<?= $arrDadosItem['lis_descricao']?>">
        </div>
        <div class="form-group">
            <label for="tarefa">Data Limite</label>
            <?php $dataLimite = date('Y-m-d', strtotime($arrDadosItem['lis_data_limite'])) ?>
            <input type="date" value="<?= $dataLimite ?>" class="form-control col-sm-2" name="dataLimite" required>
        </div>
        <input type="hidden" value="<?= $arrDadosItem['lis_id'] ?>" name="idItem">
        <button type="submit" class="btn btn-primary btn-sm">Alterar</button>
        <a href="/" class="btn btn-danger btn-sm">Cancelar</a>
    </form>
<?php include('view/footer.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: Heliaquim
 * Date: 29/01/2018
 * Time: 23:41
 */