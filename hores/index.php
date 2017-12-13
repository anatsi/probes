<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post">
      HORA 1 : <input type="time" name="hora1" value=""><br><br>
      HORA 2: <input type="time" name="hora2" value=""><br><br>
      <input type="submit" name="" value="enviar">
    </form>

    <?php
      echo "HORA 1: ".$_POST['hora1'];
      echo "<br><br><br>";
      echo "HORA 2: ".$_POST['hora2'];
      echo "<br><br><br>";
      $hora1=$_POST['hora1'];
      $hora2=$_POST['hora2'];
      if ($hora1>$hora2) {
        echo "hora 1 es mayor";
      }else {
        echo "hora 2 es mayor";
      }
     ?>
  </body>
</html>
