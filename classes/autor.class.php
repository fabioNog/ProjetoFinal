<?php
require_once("base.class.php");
class autor extends base{
    public function __construct($field=array())
    {
        parent::__construct();
        $this->table = "livro";
        if(sizeof($field) <= 0 ):
            $this->fields_value = array(
                "aut_nome" => NULL,
                 "aut_dat_nasc" => NULL,
            );
        else:
            $this->fields_value = $field;
        endif;
        $this->field_pk ="aut_cod";
    }
}
?>