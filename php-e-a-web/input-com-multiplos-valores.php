<?php

  if(isset($_GET['ingredientes'])) {

    $ingredientes = $POST['ingredientes'];

    print_r($ingredientes); // Array ( [0] => Tomate [1] => Ab�bora [2] => Feij�o [3] => Alface [4] => Cebola )

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php">
    <div>
      <input type="checkbox" name="ingredientes[]" value="Tomate"> Tomate
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Ab�bora"> Ab�bora
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Feij�o"> Feij�o
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Alface"> Alface
    </div>
    <div>
      <input type="checkbox" name="ingredientes[]" value="Cebola"> Cebola
    </div>
    <div>
      <input type="submit" value="Enviar"> 
    </div>
  </form>
</body>
</html>