<?php
class Conexiones{
    public $conex = "";
    public function ___construct(){
        $this -> conex = "";
    }
    public function conecta(){
        try{

            $this->conex = new PDO("mysql:dbname=comida;host=localhost;port=3308","root","");
            $this->conex -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
        
        }catch(PDOException $ex){
            die($ex -> getMessage());
        }
        return $this->conex;
    }


}

?>