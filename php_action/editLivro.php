<?php
    session_start();
    require_once('../classes/livro.class.php');
    require_once('../classes/conexao.class.php');

    $livro = new livro();
    $con = new conexao();
   
    if(isset($_POST['atualizar'])):
        $liv_cod = $_POST['liv_cod'];
        $liv_nome = mysqli_escape_string($con->conection ,$_POST['liv_nome']);
        $liv_lingua = mysqli_escape_string($con->conection ,$_POST['liv_lingua']);
        $liv_ano = mysqli_escape_string($con->conection,$_POST['liv_ano']); 
        
        

        $sql = "UPDATE livro SET liv_nome="."'".$liv_nome."'".", liv_lingua="."'".$liv_lingua."'".", liv_ano="."'".$liv_ano."'"." WHERE liv_cod=".$liv_cod;

        
        if(mysqli_query($con->conection,$sql)):
            header('Location: ../index.php?');
        else:
            header('Location: ../index.php?');
        endif;
        

    endif;
?>