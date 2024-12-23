<?php
// Abrir un archivo en modo escritura ('w')
$archivo = fopen("archivo.txt", "w");

// Verificar si se abrió correctamente
if ($archivo) {
    echo "El archivo fue abierto correctamente.";
} else {
    echo "No se pudo abrir el archivo.";
}

// Cerrar el archivo (aunque no se hace nada más)
fclose($archivo);
?>