<?php
require_once('LayerEntities/Inmuebles.class.php');

class ConexionMySQLERP {
    private $server;
    private $user;
    private $password;
    private $db;
    private $conexion;

       public function __construct(Inmuebles $inmuebles){
         $this->server = $inmuebles->server;
         $this->user = $inmuebles->user;
         $this->password = $inmuebles->pwd;
         $this->db = $inmuebles->database;
       }

     public function getConectar(){
        if(!isset($this->conexion)){
            $this->conexion = (mysql_connect($this->server,$this->user, $this->password)) or die('Error : '.mysql_error());
            mysql_select_db($this->db,$this->conexion) or die('Error : '.mysql_error());
            return $this->conexion;
    }
}

}

?>
