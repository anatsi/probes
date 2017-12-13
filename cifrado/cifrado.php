<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $contra="prueba";
      $salt='$tsi$/.';

      $cifrat= sha1(md5($salt . $contra));

      echo $cifrat;
     ?>
  </body>
</html>
