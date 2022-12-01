
<?php
include_once 'cabecalho.php';

?>


<div class="container">
<form action="servidor/categoria.php" method="POST" class="border p-4 mt-3">
<div class="form-group">
    <label for="nome">Nome da categoria</label>
    <input type="text" class="form-control" placeholder="Digite a categoria" name="nome">
</div>
<div class="form-group mt-3">
    <label for="descricao">Descricao</label>
    <input type="text" class="form-control" placeholder="Descricao da categoria" name="descricao">
</div>
<div class="form-group mt-5">
    <button class="btn btn-success">Cadastrar</button>
    <button type="reset" class="btn mx-4 bg-vermelho">Cancelar</button>
</div>
</form>


</div>



<?php

include_once 'rodape.php';
?>