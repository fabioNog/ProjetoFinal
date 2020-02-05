<?php
    require_once('../classes/livro.class.php');
    require_once('../classes/banco.class.php');

    $con = $this->connection;

    if(isset($_POST['btn-cadastrar'])):
        $nome_livro = mysqli_escape_string($con,$_POST['nome_livro']);
        $nacionalidade = mysqli_escape_string($con,$_POST['nacionalidade']);
        $ano_criacao = mysqli_escape_string($con,$_POST['ano_criacao']);
        
        $livro = new livro();
        $livro->setValue('nome_livro',$nome_livro);
        $livro->setValue('nacionalidade',$nacionalidade);
        $livro->setValue('ano_criacao',$ano_criacao);
        
        $sql = $livro->insert($livro);
        if(mysqli_query($con,$sql)):
            header('Location: ../index.php?sucesso');
        else:
            header('Location: ../index.php?erro');
        endif;

    endif;
?>