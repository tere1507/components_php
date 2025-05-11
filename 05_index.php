<?php
//incluimos todos los archivos
 require_once __DIR__ . '/04_includes.php';//header
 require_once __DIR__ . '/01_data_componentes.php';//load array components
 require_once __DIR__ . '/02_data_usuarios.php';//load array users
 require_once __DIR__ . '/03_function.php';//function to display data


 //assing
$componentes = require __DIR__ . '/01_data_componentes.php';//assign componets
$usuarios = require __DIR__ . '/02_data_usuarios.php';//assing users

//print functions
mostrarComponentes($componentes);//print componest
mostrarUsuarios($usuarios);//print users

echo "</body></html>";//close html

// require_once asegura que los archivos se cargan una sola vez.

// require se usa para obtener el contenido retornado de los arrays.

// Se ejecutan las funciones que imprimen los datos en pantalla.
?>
