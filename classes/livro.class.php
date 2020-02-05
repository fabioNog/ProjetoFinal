<?php
require_once("base.class.php");
class livro extends base{
    public function __construct($field=array())
    {
        parent::__construct();
        $this->table = "livro";
        if(sizeof($field) <= 0 ):
            $this->fields_value = array(
                "nome_livro" => NULL,
                 "ano_criacao" => NULL,
                 "categoria" => NULL,
                 "sinopse" => NULL,
            );
        else:
            $this->fields_value = $field;
        endif;
        $this->field_pk ="id_autor";
    }
}
?>