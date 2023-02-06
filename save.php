<?php

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$salida = $_POST['salida'];
$llegada = $_POST['llegada'];

$data = $nombres . "," . $apellidos . "," . $salida . "," . $llegada . "\n";

$file = fopen("registro.txt", "a");
fwrite($file, $data);
fclose($file);

echo "Registro guardado exitosamente";

?>