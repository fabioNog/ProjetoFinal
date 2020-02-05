<?php
    require_once('../classes/livro.class.php');
    require_once('../classes/conexao.class.php');

    $livro = new livro();
    $con = new conexao();
   
    if(isset($_POST['cadastrar'])):
        $nome_livro = mysqli_escape_string($con->conection,$_POST['nome_livro']);
        $nacionalidade = mysqli_escape_string($con->connection,$_POST['nacionalidade']);
        $ano_criacao = mysqli_escape_string($con->connection,$_POST['ano_criacao']);
        
        $livro->setValue('nome_livro',$nome_livro);
        $livro->setValue('nacionalidade',$nacionalidade);
        $livro->setValue('ano_criacao',$ano_criacao);
        
        $sql = $livro->insert($livro);
        if(mysqli_query($con->conection,$sql)):
            header('Location: ../index.php?sucesso');
        else:
            header('Location: ../index.php?erro');
        endif;

    endif;
?>