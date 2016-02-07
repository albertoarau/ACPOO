<?php
class Inmuebles {

    private $idInmueble;
    private $guid;
    private $nombre;
    private $server;
    private $database;
    private $user;
    private $pwd;

    public function idInmueble() {return $this->__get('idInmueble');}
    public function guid() {return $this->__get('guid');}
    public function nombre(){ return $this->__get('nombre');}
    public function server(){ return $this->__get('server');}
    public function database(){ return $this->__get('database');}
    public function user(){ return $this->__get('user');}
    public function pwd(){ return $this->__get('pwd');}

    private function __get($atrb) {
      switch ($atrb) {
        case '':
            return '';
        case 'idInmueble':
            return $this->idInmueble;
        case 'guid':
            return $this->guid;
        case 'nombre':
            return $this->nombre;
        case 'server':
            return $this->server;
        case 'database':
            return $this->database;
        case 'user':
            return $this->user;
        case 'pwd':
            return $this->pwd;
        default:
          return $this->$atrb;
      }
    }

    private function __set($atrb, $val) {
      switch ($atrb) {
        case '':
            return '';
        default:
          $this->$atrb = $val;
      }
    }

    private function __isset($atrb) {
      return isset($atrb);
    }

    private function __unset($atrb) {
      unset($this->$atrb);
    }



}
?>
