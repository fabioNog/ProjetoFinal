<?php
include_once('includes/header.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Livraria SOITIC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Autores
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Criar Autores</a>
                    <a class="dropdown-item" href="">Editar Autores</a>
                    <a class="dropdown-item" href="">Excluir Autores</a>
                    <a class="dropdown-item" href="">Listar Autores</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Editoras
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">Criar Editoras</a>
                    <a class="dropdown-item" href="">Editar Editoras</a>
                    <a class="dropdown-item" href="">Excluir Editoras</a>
                    <a class="dropdown-item" href="">Listar Editoras</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<br>
<br>
<!-- container -->
<div class="container">
    <form action="php_action/create.php" method="POST">
        <?php
        require_once('classes/livro.class.php');
        require_once('classes/conexao.class.php');

        ?>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label>Insira o codigo do livro</label><br>
                <input type="number" name="liv_cod" id="liv_cod" min="1" max="100">
            </div>
        </div>    

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="nome_livro"> Nome do Livro</label>
                    <input type="text" name="liv_nome" id="liv_nome" class="form-control " placeholder="Nome do Livro">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="liv_lingua">Nacionalidade:</label>
                    <select class="form-control" name="liv_lingua">
                        <option id="liv_lingua"  value="brasileira">Brasileira</option>
                        <option id="liv_lingua"  value="americana">Americana</option>
                        <option id="liv_lingua"  value="italiana">Italiana</option>
                        <option id="liv_lingua"  value="francesa">Francesa</option>
                        <option id="liv_lingua"  value="francesa">Francesa</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Insira a data</label><br>
                    <input type="datetime-local" name="liv_ano" id="liv_cod" min="1" max="100">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" style="width: 100%" class="btn btn-primary" name="cadastrar" id="cadastrar">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once('includes/footer.php');
?>