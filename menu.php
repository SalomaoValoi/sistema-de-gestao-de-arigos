<nav class="navbar navbar-expand-lg navbar-light bg-light my-2">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <?php  include_once 'servidor/categoria.php';
                
                foreach ($categorias as $categoria){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-circle mx-2"></i><?php echo $categoria['nome'] ?></a>
                </li>

                <?php }?>
            </ul>

        </div>
    </div>
</nav>