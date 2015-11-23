<?php
  class dimealgo{
     var $atributo;
    function dimealgo($algo){
	  $this->atributo=$algo;
	  echo $this->atributo;
	}
  }
  $decir = new dimealgo("Hola Andrey");
?>