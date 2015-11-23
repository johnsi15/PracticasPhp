<?php
  class saluda{
     function saludo(){echo "Hola andrey";}
	 function adios(){echo "Adios andrey";}
  }
  $instancia = new saluda();
  $jo=$instancia->saludo();
?>