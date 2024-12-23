<?php
function agregarUsuario($nombre, $correo) {
    $archivo = fopen(NOMBRE_ARCHIVO, "a"); 
    fwrite($archivo, "$nombre,$correo\n"); 
    fclose($archivo); 
}

function leerUsuarios() {
    $archivo = fopen(NOMBRE_ARCHIVO, "r"); 
    $contenido = fread($archivo, filesize(NOMBRE_ARCHIVO)); 
    fclose($archivo); 
    return $contenido;
}
?>
