<?php
include_once('includes/header.php');
require_once('classes/autor.class.php');
?>
<!-- container -->
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome do Autor</th>
                    <th>Data de Nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php                                
                $autor = new autor();
                $autor->selectAll($autor);
                while($res = $autor->returnDates()):
                   if($res->aut_data_nasc):
                    $res->aut_data_nasc = date("d/m/Y", strtotime($res->aut_data_nasc));
                   endif;
                ?>
                <tr>
                    <td><?php echo $res->aut_cod?></td>
                    <td><?php echo $res->aut_nome?></td>                    
                    <td><?php echo $res->aut_data_nasc?></td>
                    <td><button type= "button" class="btn btn-warning">Editar</a></span></button></td>
                    <td><button type= "button" class="btn btn-danger">Excluir</td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <br>

        <a href="adicionarAutor.php"><button type="button" class="btn btn-primary">Adicionar Autor</button></a>
    </div>
</div>
    <?php
    include_once('includes/footer.php');
    ?>