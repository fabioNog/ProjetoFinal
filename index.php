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
                    <td><button type= "button" class="btn btn-dark">Editar</button></td>
                    <td><button type= "button" class="btn btn-dark">excluir</td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>A mão que salva</td>
                    <td>PHP</td>
                    <td>05/02/2020</td>
                    <td><button type= "button" class="btn btn-dark">Editar</button></td>
                    <td><button type= "button" class="btn btn-dark">excluir</td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="col-6 col-md-4 col-lg-6 .offset-6">
            <button type= "button" class="btn btn-dark">Adicionar Livro</button>                
        </div>
        
    </div>
</div>
    <?php
    include_once('includes/footer.php');
    ?>