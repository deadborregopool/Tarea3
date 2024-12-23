<?php
// Abrir un archivo
$archivo = fopen("archivo.txt", "r");

// Hacer alguna operación (en este caso, nada)
echo "Archivo abierto.";

// Cerrar el archivo
fclose($archivo);
echo "Archivo cerrado.";
?>
