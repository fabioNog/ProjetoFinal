<?php
include_once('../includes/headerComponents.php');
require_once('../classes/livro.class.php');
require_once('../classes/conexao.class.php');
?>
<br>
<br>
<!-- container -->
<div class="container">
    <form action="php_action/editLivro.php" method="POST">
        
        <div class="form-group">
                <div class="col-md-6 offset-md-3">    
                    <h1> Editando Livro</h1>
                </div>
        </div>
        <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Insira os codigo do livro</label>                    
                    <select class="form-control" name="liv_cod">
                        <?php
                            $livro = new livro;
                            if(isset($_GET['liv_cod'])):
                                $liv_cod = $_GET['liv_cod'];    
                            endif;
                            $livro->selectAll($livro);
                            while($res = $livro->returnDates()):
                        ?>
                        <option type="number" id="liv_cod" value="<?php $res->liv_cod?>"><?php echo $res->liv_cod?></option>
                        <?php endwhile;?>
                        </select>                    
                </div>
            </div>   

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="nome_livro"> Nome do Livro</label>
                    <?php
                            $livro = new livro;
                            if(isset($_GET['liv_cod'])):
                                $liv_cod = $_GET['liv_cod'];    
                            endif;
                            $livro->extra_select = "where liv_cod = ".$liv_cod;
                            $livro->selectAll($livro);
                            while($res = $livro->returnDates()):
                    ?>
                    <input type="text" value="<?php echo $res->liv_nome ?>" name="liv_nome" id="liv_nome" class="form-control " placeholder="Nome do Livro">
                    <?php endwhile;?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="liv_lingua">Nacionalidade:</label>                    
                    <select class="form-control" name="liv_lingua">                    
                    <?php
                            $livro = new livro;
                            if(isset($_GET['liv_cod'])):
                                $liv_cod = $_GET['liv_cod'];    
                            endif;
                            $livro->extra_select = "where liv_cod = ".$liv_cod;
                            $livro->selectAll($livro);
                            while($res = $livro->returnDates()):                                
                    ?>                        
                        <option id="liv_lingua"  value="brasileira" <?=($res->liv_lingua == 'brasileira') ? 'selected' : ''?>>Brasileira</option>
                        <option id="liv_lingua"  value="americana" <?=($res->liv_lingua == 'americana') ? 'selected' : ''?>>Americana</option>
                        <option id="liv_lingua"  value="italiana" <?=($res->liv_lingua == 'italiana') ? 'selected' : ''?>>Italiana</option>
                        <option id="liv_lingua"  value="francesa" <?=($res->liv_lingua == 'francesa') ? 'selected' : ''?>>Francesa</option>
                        <option id="liv_lingua"  value="japonesa" <?=($res->liv_lingua == 'japonesa') ? 'selected' : ''?>>Japonesa</option>
                        <option id="liv_lingua"  value="inglesa" <?=($res->liv_lingua == 'inglesa') ? 'selected' : ''?>>Inglesa</option>
                    <?php endwhile;?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Insira a data</label><br>
                    <?php
                            $livro = new livro;
                            if(isset($_GET['liv_cod'])):
                                $liv_cod = $_GET['liv_cod'];    
                            endif;
                            $livro->extra_select = "where liv_cod = ".$liv_cod;
                            $livro->selectAll($livro);
                            while($res = $livro->returnDates()):
                    ?>
                    <input type="datetime-local" step="59" name="liv_ano" id="liv_ano" min="1" style="width: 100%" 
                    ="<?php $res->liv_ano?>">
                    <?php endwhile;?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <button type="submit" style="width: 100%" class="btn btn-primary" name="cadastrar" id="cadastrar">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once('../includes/footer.php');
?>