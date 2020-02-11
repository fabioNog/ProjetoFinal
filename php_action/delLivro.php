<?php
    session_start();
    require_once('../classes/livro.class.php');
    require_once('../classes/conexao.class.php');

    $livro = new livro();
    $con = new conexao();
   
    if(isset($_POST['deletar'])):
        $liv_cod = $_POST['liv_cod'];
        echo $liv_cod;

        $liv_nome = mysqli_escape_string($con->conection ,$_POST['liv_nome']);

        
        $sql = $livro->update($livro);


        /*if(mysqli_query($con->conection,$sql)):
            $_SESSION['mensagem'] = 'Cadastrado com Sucesso';
            header('Location: ../index.php?');
        else:
            $_SESSION['mensagem'] = 'Cadastrado com Sucesso';
            header('Location: ../index.php?');
        endif;*/

    endif;
?>