
<?php
require_once("base.class.php");
class editora extends base{
    public function __construct($field=array())
    {
        parent::__construct();
        $this->table = "livro";
        if(sizeof($field) <= 0 ):
            $this->fields_value = array(
                "edi_nome" => NULL,
                "edi_rua" => NULL,
                "edit_bairro" => NULL,
                "edit_cidade" => NULL,
            );
        else:
            $this->fields_value = $field;
        endif;
        $this->field_pk ="edi_cod";
    }
}
?>