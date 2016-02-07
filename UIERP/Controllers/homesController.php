<?php namespace Controllers;

class homesController {


public function __construct(){

}

  public function index(){
    $datos = "Vista del home";
     return  $datos;
  }


}

$homes = new homesController();
?>
