<?php
include_once('includes/header.php'); 
require_once('classes/livro.class.php');
?>
<!-- container -->
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Nome</th>
      <th scope="col">Nacionalidade</th>
      <th scope="col">Ano</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
      <th scope="col">info</th>
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
      <th scope="row"><?php echo $res->liv_cod?></th>
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
<div class="container">
    <div class="row">
        <a href="adicionarLivro.php" class="btn btn-primary col-lg-4 offset-lg-4 col-6 offset-8 col-md-6 offset-md-3">    
                Adicionar Livro                
        </a>
    </div>
</div>

    <?php
    include_once('includes/footer.php');
    ?>