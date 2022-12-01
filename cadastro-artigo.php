<?php
include_once 'cabecalho.php';

?>


<div class="container">
    <form action="servidor/categoria.php" method="POST" class="border p-4 mt-3">
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria" class="form-select">

                <?php 
                include_once 'servidor/categoria.php';

                foreach ($categorias as $cat){?>
                <option value="<?php echo $cat['id'] ?>"> <?php echo $cat['nome'] ?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" placeholder="Digite o titulo" name="titulo">
        </div>
        <div class="form-group mt-3">
            <label for="descricao">Texto</label>
          <textarea name="texto" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group mt-3">
            <label for="categoria">Autor</label>
            <select name="autor" class="form-select">

                <?php 
                include_once 'servidor/autor.php';

                foreach ($autoress as $autor){?>
                <option value="<?php echo $autor['id'] ?>"> <?php echo $autor['nome'] ?></option>
                <?php }?>
            </select>
        <div class="form-group mt-5">
            <button class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn mx-4 bg-vermelho">Cancelar</button>
        </div>
    </form>


</div>



<?php

include_once 'rodape.php';
?>