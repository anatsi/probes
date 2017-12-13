<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      FECHA: <input type="date" name="fecha" value="">
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
<?php
  echo $_POST['fecha'];
  $fecha=$_POST['fecha'];

$fechahoy='2017-11-30';
if ($fechahoy>$fecha) {
  echo "hoy";
}else {
  echo "fecha";
}
 ?>
