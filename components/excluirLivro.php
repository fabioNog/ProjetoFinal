<?php
include_once('../includes/headerComponents.php');
require_once('../classes/livro.class.php');
require_once('../classes/conexao.class.php');
?>

<div class="container" style="margin-top:5%">
    <div class="row">
        <div class="card text-white bg-danger col-sm-12 col-lg-6 col-md-6 offset-md-3" style="width: 100%;">
            <div class="card-header">Você esta presta a deletar</div>
            <div class="card-body">
            <?php
                $livro = new livro;
                if(isset($_GET['liv_cod'])):
                    $liv_cod = $_GET['liv_cod'];    
                endif;
                $livro->extra_select = "where liv_cod = ".$liv_cod;
                $livro->selectAll($livro);
                while($res = $livro->returnDates()):                
            ?>
                <h5 class="card-title" style="text-align: center" name="liv_cod"><?php echo $res->liv_nome?></h5>
            <?php
                endwhile;
            ?>                            
            </div>            
        </div>
        <button 
            type="submit" 
            class="btn btn-danger col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-3 col-3 offset-2" name="deletar" 
            style="margin-top: 20px" 
        >
            Excluir
        </button>
        <a href="../index.php" class="btn btn-primary col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-2 col-3 offset-1" style="margin-top: 20px">Cancelar</a>
    </div>

</div>

<?php
include_once('../includes/footer.php');
?>