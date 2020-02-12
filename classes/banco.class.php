<?php
    abstract class banco{
        public $server       = "localhost:3306";
        public $user           = "root";
        public $password       = "";
        public $database_name  = "livraria";
        public $conection      = "NULL";
        public $dataset        = "NULL";
        public $affect_row     = -1;

        //Meus Metodos construtor e destrutor
        public function __construct()
        {
            $this->conect();
        }//construtor da classe para chamada de rotinas

        public function __destruct()
        {
            if($this->conection != NULL): 
                mysqli_close($this->conection);
            endif;
        }

        public function conect(){
            
            $this->conection = mysqli_connect($this->server,$this->user,$this->password,$this->database_name,TRUE) 
            or die($this->handle_erro(__FILE__,__FUNCTION__,mysqli_errno($this->conection),mysqli_error($this->conection),TRUE));
            mysqli_query($this->conection,"SET NAMES 'utf8");
            mysqli_query($this->conection,"SET character_set_connection=utf8");
            mysqli_query($this->conection,"SET character_set_client=utf8");
            mysqli_query($this->conection,"SET character_set_results=utf8");
        }//Classe ao qual conectara ao banco

        //Construindo a função SQL Insert
        public function insert($object){
            $sql = "INSERT INTO ".$object->table." (";
            for($i=0;$i<count($object->fields_value); $i++) :
                $sql .= key($object->fields_value);
                if($i < (count($object->fields_value) - 1)):
                    $sql .= ",";
                else:
                    $sql .= ")";
                endif;
                next($object->fields_value);
            endfor;
            reset($object->fields_value);
            $sql .= "VALUES (";
            for($i=0;$i<count($object->fields_value); $i++) :
                //Verificando primeiro se o valor é numerico ou string
                $sql .= is_numeric($object->fields_value[key($object->fields_value)]) ? 
                $object->fields_value[key($object->fields_value)] :
                "'".$object->fields_value[key($object->fields_value)]."'";
                if($i < (count($object->fields_value) - 1)):
                    $sql .= ",";
                else:
                    $sql .= ")";
                endif;
                next($object->fields_value);
            endfor;
            return $this->executeSQL($sql);
        }//Inserir

        //Construindo a função SQL Update
        public function update($object){
            print_r($object);
            
            $sql = "UPDATE ".$object->table." SET ";            
            for($i=0;$i<count($object->fields_value); $i++) :
                $sql .= key($object->fields_value)."=";
                $sql .= is_numeric($object->fields_value[key($object->fields_value)]) ? 
                $object->fields_value[key($object->fields_value)] :
                "'".$object->fields_value[key($object->fields_value)]."'";
                if($i < (count($object->fields_value) - 1)):
                    $sql .= ", ";
                else:
                    $sql .= " ";
                endif;
                next($object->fields_value);
            endfor;
            $sql .= "WHERE ".$object->field_pk."=";
            
            $sql .= is_numeric($object->value_pk) ? $object->value_pk : "'".$object->value_pk."'";

            echo $sql;
            
            return $this->executeSQL($sql);
        }//Update

        //Construindo a função SQL Delete
        public function delete($object){
            $sql = "DELETE FROM ".$object->table;
            $sql .= " WHERE ".$object->field_pk." = ";
            $sql .= is_numeric($object->value_pk) ? $object->value_pk : "'".$object->value_pk."'";
            return $this->executeSQL($sql);            
        }//Delete
        
        //Construindo a função SQL Select
        public function selectAll($object){
            $sql = "SELECT * FROM ".$object->table;
            if($object->extra_select != NULL):
                $sql .=" ".$object->extra_select;
            endif;
            return $this->executeSQL($sql);
        }//Select all fields in the my table

        //Construindo a função SQL Select por Campos
        public function selectFields($object){
            $sql = "SELECT  ";
            for($i=0;$i<count($object->fields_value); $i++) :
                $sql .= key($object->fields_value);
                if($i < (count($object->fields_value) - 1)):
                    $sql .= ",";
                else:
                    $sql .= " ";
                endif;
                next($object->fields_value);
            endfor;            
            $sql .= " FROM ".$object->table;
            if($object->extra_select != NULL):
                $sql .=" ".$object->extra_select;
            endif;
            return $this->executeSQL($sql);
        }//Select any fields in the my table
        
        //Rotina de Execução dos SQLs
        public function executeSQL($sql=NULL){
            if($sql!=NULL):
                $query = mysqli_query($this->conection,$sql) or 
                $this->handle_erro(__FILE__,__FUNCTION__);
                $this->affect_row = mysqli_affected_rows($this->conection);
                //Verificação: Interpolando rotina pra executar meu select
                //Sabendo qual query estou executando
                if(substr(trim(strtolower($sql)),0,6) == 'select'):
                    $this->dataset  = $query;
                    return $this->dataset;
                else:
                    return $this->affect_row;
                endif;

            else:
                $this->handle_erro(__FILE__,__FUNCTION__,NULL,"Não Foi possivel encontrar Comando SQL, Tente Novamente",FALSE);
            endif;
        }//Execute 

        public function returnDates($type=NULL){
            switch (strtolower($type)):
                case "array":
                    return mysqli_fetch_array($this->dataset);
                break;
                case "assoc":
                    return mysqli_fetch_assoc($this->dataset);
                break;
                case "object":
                    return mysqli_fetch_object($this->dataset);
                break;
                default:
                    return mysqli_fetch_object($this->dataset);
                break;
            endswitch;

        }//Return Date

        //Rotina para tratamento de erros
        public function handle_erro($file=NULL,$routine=NULL,$number_erro=NULL,$msg_erro=NULL,$generation_except=FALSE){
            if($file == NULL) $file="Nao Informado";
            if($routine == NULL) $routine="Nao Informada";
            if($number_erro == NULL) $number_erro=mysqli_errno($this->conection);
            if($msg_erro == NULL) $msg_erro=mysqli_error($this->conection);
            $result = 'Ocorreu um erro com o seguintes detalhes: <br/>
            <strong>Arquivo:</strong>' .$file.'<br/>
            <strong>Rotina:</strong> ' .$routine.'<br/>
            <strong>Codigo:</strong>' .$number_erro.'<br/>
            <strong>Messagem:</strong>' .$msg_erro;
            if($generation_except == FALSE):
                echo($result);
            
            else:
                die($result);
            endif;
        }
    }//Fim da minha class Banco

    

?>