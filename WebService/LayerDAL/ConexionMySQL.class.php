<?php
class ConexionMySQL {
    private $server;
    private $user;
    private $password;
    private $db;
    private $conexion;

       public function __construct(){
         $this->server = "localhost";
         $this->user = "root";
         $this->password = "root";
         $this->db = "db_AC_Manager"
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
