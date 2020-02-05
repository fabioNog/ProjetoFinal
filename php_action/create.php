<?php
    require_once('../classes/livro.class.php');
    require_once('../classes/conexao.class.php');

    $livro = new livro();
    $con = new conexao();
   
    if(isset($_POST['cadastrar'])):
        $liv_nome = mysqli_escape_string($con->conection,$_POST['liv_nome']);
        $liv_lingua = mysqli_escape_string($con->connection,$_POST['liv_lingua']);
        $liv_ano = mysqli_escape_string($con->connection,$_POST['liv_ano']);
        
        $livro->setValue('liv_nome',$liv_nome);
        $livro->setValue('liv_lingua',$liv_lingua);
        $livro->setValue('liv_ano',$liv_ano);
        
        $sql = $livro->insert($livro);
        if(mysqli_query($con->conection,$sql)):
            header('Location: ../index.php?sucesso');
        else:
            header('Location: ../index.php?erro');
        endif;

    endif;
?>