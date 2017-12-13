<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>imagenes en formulario</title>
  </head>
  <body>
    <form class="" action="imagenes.php" method="post">
      <input type="file" name="img" value="">
      <input type="submit" name="" value="Enviar">
    </form>

    <?php
      echo $_POST['img'];
     ?>
  </body>
</html>
