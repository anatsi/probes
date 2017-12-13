<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dia=date('w');
      echo $dia;
      echo "<br><br>";
      $hoy=date('d')+2;
      $hoy= $hoy . date('-m-Y');
      echo $hoy;
      echo "<br><br>";
      $otrodia=date("w", strtotime($hoy));
      echo $otrodia;
     ?>
  </body>
</html>
