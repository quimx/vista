<?php include('view/header.php'); ?>
<title>Incluir tarefa</title>
<h3>Listagem de tarefas</h3>
<br />
<h5>Incluir tarefa</h5>
<br />
<form action="/lista/cadastrar" method="post">
    <div class="form-group">
        <label for="tarefa">Tarefa</label>
        <input type="text" maxlength="120" class="form-control col-sm-6" name="tarefa" required>
    </div>
    <div class="form-group">
        <label for="tarefa">Data Limite</label>
        <input type="date" value="<?= date('Y-m-d')?>" class="form-control col-sm-2" name="dataLimite" required>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
    <a href="/" class="btn btn-danger btn-sm">Cancelar</a>
</form>
<?php include('view/footer.php'); ?>
