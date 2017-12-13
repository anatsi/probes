<?php

$dia_manana = date('d',time()+84600);
$mes_ano = date('Y-m');
$fecha=$mes_ano."-".$dia_manana;
echo $fecha;

 ?>
