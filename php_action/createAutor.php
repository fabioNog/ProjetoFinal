<?php
    session_start();
    require_once('../classes/autor.class.php');
    require_once('../classes/livro_autor.class.php');
    require_once('../classes/conexao.class.php');

    $autor = new autor();
    $livro_autor = new livro_autor();
    $con = new conexao();
   
    if(isset($_POST['cadastrar'])):
        //Atribuindo valores do POST Autor para as variaveis
        $aut_cod = $_POST['aut_cod'];
        $aut_nome = mysqli_escape_string($con->conection ,$_POST['aut_nome']);
        $aut_data_nasc = mysqli_escape_string($con->conection,$_POST['aut_data_nasc']);
        
        //Atribuindo valor do POST livro para a variavel        
        $liv_cod = mysqli_escape_string($con->conection ,$_POST['liv_cod']);        
        
        //Setando as Variaveis para fazer o insert no Autor
        $autor->setValue('aut_cod',$aut_cod);
        $autor->setValue('aut_nome',$aut_nome);
        $autor->setValue('aut_data_nasc',$aut_data_nasc);

        //Setando as Variaveis para fazer o insert no Livro_Autor
        $livro_autor->setValue('aut_cod',$aut_cod);
        $livro_autor->setValue('liv_cod',$liv_cod);
        
        
        
        $sql1 = $autor->insert($autor);
        $slq2 = $livro_autor->insert($livro_autor);
        
        if((mysqli_query($con->conection,$sql1)) && (mysqli_query($con->conection,$sql2))):
            $_SESSION['mensagem'] = 'Cadastrado com Sucesso';
            header('Location: ../listarAutor.php?');
        else:
            $_SESSION['mensagem'] = 'Cadastrado com Sucesso';
            header('Location: ../listarAutor.php?');
        endif;

    endif;
?>