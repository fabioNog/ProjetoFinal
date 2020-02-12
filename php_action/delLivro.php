<?php
    session_start();
    require_once('../classes/livro.class.php');
    require_once('../classes/conexao.class.php');

    $livro = new livro();
    $con = new conexao();
   
    if(isset($_POST['deletar'])):
        $liv_cod = $_POST['liv_cod'];
    endif;
        $livro->setValue('liv_cod',$liv_cod);        
        $sql = 'DELETE FROM livro
        WHERE liv_cod ='. $liv_cod;

        if(mysqli_query($con->conection,$sql)):            
            header('Location: ../index.php?');
        else:
            header('Location: ../index.php?');
        endif;
    
?>