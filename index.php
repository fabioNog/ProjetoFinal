<?php
include_once('includes/header.php'); 
require_once('classes/livro.class.php');
?>

<?php
session_start();
if(isset($_SESSION['mensagem'])): 
    echo $_SESSION['mensagem'];
endif;

?>

<!-- container -->
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nome do Livro</th>
                    <th>Nacionalidade</th>
                    <th>Ano de Publicação</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                <?php                                
                $livro = new livro();
                $livro->selectAll($livro);
                while($res = $livro->returnDates()):
                   if($res->liv_ano):
                    $res->liv_ano = date("d/m/Y", strtotime($res->liv_ano));
                   endif;
                ?>
                <tr>
                    <td><?php echo $res->liv_cod?></td>
                    <td><?php echo $res->liv_nome?></td>                    
                    <td><?php echo $res->liv_lingua?></td>
                    <td><?php echo $res->liv_ano?></td>
                    <td><a href="components/editarLivro.php?liv_cod=<?php echo $res->liv_cod;?>"><button type= "button" class="btn btn-dark">Editar</button></a></td>
                    <td><a href="components/excluirLivro.php?liv_cod=<?php echo $res->liv_cod;?>"><button type= "button" class="btn btn-danger">Excluir</button></a></td>
                    <td><button type= "button" class="btn btn-warning">info</td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <br>

        <a href="adicionarLivro.php">
            <button type="button" class="btn btn-primary" onclick="">
                Adicionar Livro
            </button>
        </a>
    </div>
</div>
    <?php
    include_once('includes/footer.php');
    ?>