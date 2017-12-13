<?php
$nombresSer=base64_decode($_GET['nombres']);
$nombres=unserialize($nombresSer);

$edadesSer=base64_decode($_GET['edades']);
$edades=unserialize($edadesSer);

$ciudadesSer=base64_decode($_GET['ciudades']);
$ciudades=unserialize($ciudadesSer);

for ($i=0; $i < count($nombres); $i++) {
  echo "NOMBRE: ".$nombres[$i]." EDAD: ".$edades[$i]." CIUDAD: ".$ciudades[$i]."<br><br>";
}
 ?>
