<?php
$vacio = "";
$colores = array ('azul', 'verde', 'rosa');
$verano = array ('cielo' => 'azul', 'comida' => 'gazpacho', 'temperatura' => 28, 'mola' => true);
$objeto = (object) $vacio;
echo '<pre>';
var_dump($objeto);
echo '</pre>';
foreach ($objeto as $key => $value){
	$a[$key] = $value;
}
print_r($a);