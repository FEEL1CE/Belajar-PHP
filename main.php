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

  
 class mahasiswa
 {
  public $nama;
  private $NIMl;
  public $jurusan;

  function set_ngaran($nama,$NIM, $jurusan)
  {
    $this->nama = $nama;
    $this->NIM = $NIM;
    $this->jurusan=$jurusan;
  }
  function get_ngaran()
  {
    return $this->jurusan.  $this->nama .$this->NIM;
  }
 }


 
 $manggo = new fruit;
 $manggo->set_name("Manggo ");
 $manggo->set_color("Green");

$pria = new mahasiswa;
$pria->set_ngaran("fardan", " 220102007 " , "TI ");
echo $pria->get_ngaran();

 echo $manggo->get_name();
 echo $manggo->get_color();

?>