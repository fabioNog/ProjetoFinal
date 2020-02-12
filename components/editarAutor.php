<?php
include_once('../includes/headerComponents.php');
require_once('../classes/autor.class.php');
require_once('../classes/conexao.class.php');
?>
<br>
<br>
<!-- container -->
<div class="container">
    <form action="../php_action/editAutor.php" method="POST">
    <?php
        $autor = new autor;
        if(isset($_GET['aut_cod'])):
            $aut_cod = $_GET['aut_cod'];    
    ?>
    <input type="text" 
        name= "aut_cod"
        value="<?php echo $aut_cod?>" 
        style="display: none"
    >
    <?php endif;?>
        <div class="form-group">
                <div class="col-md-6 offset-md-3">    
                    <h1> Editando Autor</h1>
                </div>
        </div>
   
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="nome_autor"> Altere se nescessitar o nome do Autor</label>
                    <?php
                            $autor = new autor;
                            if(isset($_GET['aut_cod'])):

                                $aut_cod = $_GET['aut_cod'];    
                            endif;
                            $autor->extra_select = "where aut_cod = ".$aut_cod;
                            $autor->selectAll($autor);
                            while($res = $autor->returnDates()):
                    ?>
                    <input type="text" value="<?php echo $res->aut_nome ?>" name="aut_nome" id="aut_nome" class="form-control " placeholder="Nome do autor">
                    <?php endwhile;?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Altere se nescessitar a data</label><br>
                    <?php
                            require_once('../classes/conexao.class.php');
                            $autor = new autor;
                            $con = new conexao();
                            if(isset($_GET['aut_cod'])):
                                $aut_cod = $_GET['aut_cod'];    
                            endif;
                            $autor->extra_select = "where aut_cod = ".$aut_cod;
                            $autor->selectAll($autor);
                            while($res = $autor->returnDates()):
                                $aut_anoTeste = date('Y-m-d\TH:i:s',strtotime($res->aut_data_nasc));
                    ?>
                    <input type="datetime-local" value="<?php echo $aut_anoTeste ?>" step="59" name="aut_data_nasc"  style="width: 100%">
                    <?php endwhile;?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" style="width: 100%" class="btn btn-primary" name="atualizar">Atualizar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once('../includes/footer.php');
?>