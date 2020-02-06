<?php
include_once('includes/header.php');
require_once('classes/livro.class.php');

$livro = new livro();

$livro->setValue('liv_cod',6);
$livro->setValue('liv_nome',"Testando mesmo");
$livro->insert($livro);
echo '<pre>';
print_r($livro);
echo '<pre>';
?>