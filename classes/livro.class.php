<?php
require_once("base.class.php");
class livro extends base{
    public function __construct($field=array())
    {
        parent::__construct();
        $this->table = "livro";
        if(sizeof($field) <= 0 ):
            $this->fields_value = array(
                 "liv_cod" => NULL,
                 "liv_nome" => NULL,
                 "liv_lingua" => NULL,
                 "liv_ano" => NULL,
                 "resumo" => NULL,                 
            );
        else:
            $this->fields_value = $field;
        endif;
        $this->field_pk ="liv_cod";
    }
}
?>