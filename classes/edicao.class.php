
<?php
require_once("base.class.php");
class edicao extends base{
    public function __construct($field=array())
    {
        parent::__construct();
        $this->table = "livro";
        if(sizeof($field) <= 0 ):
            $this->fields_value = array(
                "edit_qtd" => NULL,
                "edit_pag" => NULL,
                "edit_ano" => NULL,
            );
        else:
            $this->fields_value = $field;
        endif;
        $this->field_pk ="edit_isnb";
        $this->field_fk ="liv_cod";
        $this->field_fk ="edit_cod";
    }
}
?>