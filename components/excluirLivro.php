<?php
include_once('../includes/headerComponents.php');
require_once('../classes/livro.class.php');
require_once('../classes/conexao.class.php');
?>
<br>
<br>

<div class="container" style="margin-top:5%">
    <div class="row">
        <div class="card text-white bg-danger col-sm-6 col-lg-6 offset-lg-4 offset-md-2 .offset-sm-6 offset-1" style="max-width: 18rem;">
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
                <h5 class="card-title"><?php echo $res->liv_nome?></h5>
            <?php
                endwhile;
            ?>                            
            </div>            
        </div>        
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <button type="submit"  class="btn btn-danger col-lg-2 offset-lg-4  col-sm-2 col-3 offset-2" name="atualizar">Excluir</button>
        <br/>
        <button type="submit"  class="btn btn-primary col-lg-2 offset-lg-0  col-sm-2 col-3 offset-1"  name="atualizar">Voltar</button>
    </div>
</div>
<?php
include_once('../includes/footer.php');
?>