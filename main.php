<?php

 class fruit 
 {
  public $name;
  public $color;

  function Introduce(){
    return $this->name. "  " .$this->color;
  }
   function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
  function set_color($color){
    $this->color = $color;
  }

  function get_color(){
    return $this->color;
  }
 }
 
 $manggo = new fruit;
 $manggo->set_name("Manggo ");
 $manggo->set_color("Green");


 echo $manggo->get_name();
 echo $manggo->get_color();

?>