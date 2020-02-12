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
                    <th>Codigo </th>
                    <th>Nome </th>
                    <th>Nascimento</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <th>Info</th>
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
                    <td><a href="components/editarAutor.php?aut_cod=<?php echo $res->aut_cod;?>"><button type= "button" class="btn btn-dark">Editar</button></a></td>
                    <td><a href="components/excluirAutor.php?aut_cod=<?php echo $res->aut_cod;?>"><button type= "button" class="btn btn-danger">Excluir</button></a></td>
                    <td><button type= "button" class="btn btn-warning">info</td>
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