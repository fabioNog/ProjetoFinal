<?php
require_once("base.class.php");
class livro_autor extends base{
    public function __construct($field=array())
    {
        parent::__construct();
        $this->table = "livro_autor";
        if(sizeof($field) <= 0 ):
            $this->fields_value = array(
                "lva_cod" => NULL,
                "aut_cod" => NULL,
                "liv_cod" => NULL,
            );
        else:
            $this->fields_value = $field;
        endif;
        $this->field_pk ="lva_cod";
        $this->field_fk ="aut_cod";
        $this->field_fk ="liv_cod";
    }
}
?>