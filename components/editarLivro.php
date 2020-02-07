<?php
include_once('../includes/headerComponents.php');
include_once('../classes/livro.class.php');
$livro = new livro();
?>
<br>
<br>
<!-- container -->
<div class="container">
    <form action="php_action/create.php" method="POST">
        <?php
        require_once('../classes/livro.class.php');
        require_once('../classes/conexao.class.php');

        ?>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label>Insira o codigo do livro</label><br>
                <input type="number" name="liv_cod" id="liv_cod" min="1" max="10000" style="width: 100%">
            </div>
        </div>    

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="nome_livro"> Nome do Livro</label>
                    <input type="text" name="liv_nome" id="liv_nome" class="form-control " placeholder="Nome do Livro">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="liv_lingua">Nacionalidade:</label>
                    <select class="form-control" name="liv_lingua">
                        <option id="liv_lingua"  value="brasileira">Brasileira</option>
                        <option id="liv_lingua"  value="americana">Americana</option>
                        <option id="liv_lingua"  value="italiana">Italiana</option>
                        <option id="liv_lingua"  value="francesa">Francesa</option>
                        <option id="liv_lingua"  value="francesa">Francesa</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label>Insira a data</label><br>
                    <input type="datetime-local" step="59" name="liv_ano" id="liv_ano" min="1" style="width: 100%">
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