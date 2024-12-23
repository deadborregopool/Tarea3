<?php
// Archivo requerido
require "archivo_inexistente.php"; // No existe, se detiene la ejecución
echo "Este mensaje no se ejecutará porque require detuvo el script.";
?>
