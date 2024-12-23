<?php
require "configuracion.php";

include "funciones.php";


echo "<strong>Agregando un nuevo usuario...</strong><br>";
agregarUsuario("Usuario3", "correo3@example.com");
echo "Usuario agregado exitosamente.<br>";

echo "<strong>Lista de usuarios:</strong><br>";
$usuarios = leerUsuarios();
echo nl2br($usuarios);


echo "<strong>Escribiendo contenido adicional...</strong><br>";
$archivo = fopen(NOMBRE_ARCHIVO, "a");
fwrite($archivo, "Usuario4,correo4@example.com\n");
fclose($archivo);
echo "Contenido adicional escrito.<br>";


echo "<strong>Usuarios actualizados:</strong><br>";
$usuariosActualizados = leerUsuarios();
echo nl2br($usuariosActualizados);
?>
