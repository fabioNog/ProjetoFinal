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
                <a class="nav-link" onclick="Home()">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Autores
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="components/Autores/criarAutores.php">Criar Autores</a>
                    <a class="dropdown-item" href="components/Autores/criarAutores.php">Editar Autores</a>
                    <a class="dropdown-item" href="components/Autores/criarAutores.php">Excluir Autores</a>
                    <a class="dropdown-item" href="components/Autores/criarAutores.php">Listar Autores</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Editoras
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="components/Editoras/criarEditoras.php">Criar Editoras</a>
                    <a class="dropdown-item" href="components/Editoras/editarEditoras.php">Editar Editoras</a>
                    <a class="dropdown-item" href="components/Editoras/deletarEditoras.php">Excluir Editoras</a>
                    <a class="dropdown-item" href="components/Editoras/listarEditoras.php">Listar Editoras</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
    </div>
</nav>
<!-- container -->
<div class="container">
    <table class="table text-center">
        <thead>
            <tr>
                <th>Nome do Livro</th>
                <th>Escrito em</th>
                <th>Ano de Publicação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A mão que salva</td>
                <td>PHP</td>
                <td>05/02/2020</td>
            </tr>
        </tbody>
    </table>
    <?php
    include_once('includes/footer.php');
    ?>