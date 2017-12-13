
<?php
  $nombre=['nombre1', 'nombre2', 'nombre3', 'nombre4'];
  $edad=[1, 2, 3, 4];
  $ciudad=['ciu1', 'ciu2', 'ciu3', 'ciu4'];

  $nombreSer=serialize($nombre);
  $nombreEnc=base64_encode($nombreSer);
  $edadSer=serialize($edad);
  $edadEnc=base64_encode($edadSer);
  $ciudadSer=serialize($ciudad);
  $ciudadEnc=base64_encode($ciudadSer);

  header("Location: comprobar.php?nombres=".$nombreEnc."&edades=".$edadEnc."&ciudades=".$ciudadEnc);
  echo "<a href='comprobar.php?nombres=".$nombreEnc."&edades=".$edadEnc."&ciudades=".$ciudadEnc."'>COMPROBAR</a>";
 ?>
