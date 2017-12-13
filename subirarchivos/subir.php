<?php
var_dump($_FILES['archivo1']);
echo "<br><br>";
var_dump($_FILES['archivo2']);
echo "<br><br>";
var_dump($_FILES['archivo3']);
echo "<br><br>";
for ($i=1; $i < 4; $i++) {
    if ($_FILES['archivo'.$i]['name']!="") {
      $nombre_archivo = $_FILES['archivo'.$i]['name'];
      $size_archivo =  $_FILES['archivo'.$i]['size'];

      //ruta en el servidor donde guardar el archivo
      $ruta="file/".$nombre_archivo;

      if(is_uploaded_file($_FILES['archivo'.$i]['tmp_name'])) {
        if(move_uploaded_file($_FILES['archivo'.$i]['tmp_name'], $ruta)) {
          echo "<b>Subida correcta!. Datos:</b><br>";
         }
      }else {
        echo "<b> Error al subir el archivo</b><br>";
      }
    }
}


 ?>
