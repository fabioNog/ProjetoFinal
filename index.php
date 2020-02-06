<?php
include_once('includes/header.php');
require_once('classes/livro.class.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Livraria SOITIC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link">Home<span class="sr-only"></span></a>
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
<!-- container -->
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nome do Livro</th>
                    <th>Nacionalidade</th>
                    <th>Ano de Publicação</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php                                
                $livro = new livro();
                $livro->selectAll($livro);
                while($res = $livro->returnDates()):
                ?>
                <tr>
                    <td><?php echo $res->liv_cod?></td>
                    <td><?php echo $res->liv_nome?></td>                    
                    <td><?php echo $res->liv_lingua?></td>
                    <td><?php echo $res->liv_ano?></td>
                    <td><button type= "button" class="btn btn-warning">Editar</a></span></button></td>
                    <td><button type= "button" class="btn btn-danger">Excluir</td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <br>

        <a href="adicionarLivro.php"><button type="button" class="btn btn-primary">Adicionar Livro</button></a>
    </div>
</div>
    <?php
    include_once('includes/footer.php');
    ?>