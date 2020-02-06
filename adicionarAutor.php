<?php
include_once('includes/header.php');
?>

<br>
<br>
<!-- container -->
<div class="container">
    <form action="php_action/createAutor.php" method="POST">
        <?php
        require_once('classes/livro.class.php');
        require_once('classes/conexao.class.php');
        require_once('classes/livro.class.php')

        ?>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label>Insira o codigo do autor</label><br>
                <input type="number" name="aut_cod" id="aut_cod" min="1"  style="width: 100%">
            </div>
        </div>
        

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label for="aut_nome"> Nome do Autor</label>
                <input type="text" name="aut_nome" id="liv_nome" class="form-control " placeholder="Nome do Autor">
            </div>
        </div>


            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Insira a data de nascimento</label><br>
                    <input type="datetime-local" step="59" name="aut_data_nasc" min="1" style="width: 100%">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Insira os codigo do livro</label>                    
                    <select class="form-control" name="liv_cod">
                        <?php                                
                            $livro = new livro();
                            $livro->selectAll($livro);
                            while($res = $livro->returnDates()):
                        ?>
                        <option id="liv_cod"  value=<?php $res->liv_cod?>><?php echo $res->liv_cod?></option>
                        <?php endwhile;?>
                        </select>                    
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
include_once('includes/footer.php');
?>