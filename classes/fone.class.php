<?php
require_once("base.class.php");
class fone extends base{
    public function __construct($field=array())
    {
        parent::__construct();
        $this->table = "livro";
        if(sizeof($field) <= 0 ):
            $this->fields_value = array(
                "edf_fone" => NULL,
            );
        else:
            $this->fields_value = $field;
        endif;
        $this->field_pk ="edf_cod";
        $this->field_fk ="editora_cod";
    }
}
?>