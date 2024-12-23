<?php
// Abrir un archivo existente en modo lectura ('r')
$archivo = fopen("archivo.txt", "r");

// Leer el contenido completo del archivo
$contenido = fread($archivo, filesize("archivo.txt"));
echo "Contenido del archivo:<br>" . nl2br($contenido);

// Cerrar el archivo
fclose($archivo);
?>
