<?php
// Abrir un archivo en modo escritura ('w')
$archivo = fopen("archivo.txt", "w");

// Escribir contenido en el archivo
fwrite($archivo, "Hola, mundos.\n");
fwrite($archivo, "Este es un ejemplo de fwrite.\n");
echo "Contenido escrito en el archivo.";

// Cerrar el archivo
fclose($archivo);
?>
