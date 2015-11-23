<html>
  <head>
    <title>Ejemplo de uso simple en envío y recepción de parámetros con PHP</title>
  </head>
  <body>
 
    <?php
    // Si existe la variable $_POST['comida'], entonces muestra la comida favorita
    if (isset($_POST['comida'])) {
      echo 'Hola, ' . $_POST['nombre'] . ', tu comida favorita es: ' . $_POST['comida'];
    } 
    else { // Si no, muestra un formulario solicitando la comida favorita
    ?>
 
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      ¿Cuál es tu nombre?
      <input type="text" name="nombre" />
      ¿Cuál es tu comida favorita?
      <select name="comida">
        <option value="Spaguetis">Spaguetis</option>
        <option value="Asado">Asado</option>
        <option value="Pizza">Pizza</option>
      </select>
      <input type="submit" name="muestra" value="Seguir" />
    </form>
 
    <?php
    } //Fin del bloque else
    ?>
 
  </body>
</html>