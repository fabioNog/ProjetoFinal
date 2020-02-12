<?php
require_once("banco.class.php");
abstract class base extends banco{
    //Propriedades da classe base
    public $table = "";
    public $fields_value =  array();
    //Chave Primaria
    public $field_pk = NULL;
    public $value_pk = NULL;
    //Chave Estrangeira
    public $field_fk = NULL;
    public $value_fk = NULL;
    
    public $extra_select = "";//Caso eu nescessite de manipular algum order by, inner join etc..

    //Metodos

    //Fução que verifica o array e adiciona um novo campo nele ou
    // também podera ser adcionado um valor
    public function addFields($field=NULL,$value=NULL){
        if($field != NULL):  
            $this->fields_value[$field] = $value;
        endif;
    }//method add

    //Funcão para deletar valor do campo
    public function delField($field=NULL){
        if(array_key_exists($field,$this->fields_value)):
            unset($this->fields_value[$field]);
        endif;
    }//method delete

    //Função para pegar um valor de um campo e modificar
    public function setValue($field=NULL,$value=NULL){
        if($field != NULL && $value != NULL):
            $this->fields_value[$field] = $value;
        endif;
    }//method Set

    //Função para pegar um valor de um campo e modificar
    public function getValue($field=NULL){
        if($field != NULL && array_key_exists($field,$this->fields_value)):
            return $this->fields_value[$field];
        else:
            return FALSE;
        endif;
    }//method Set

}//Fim da Classe Base para as tabelas
?>