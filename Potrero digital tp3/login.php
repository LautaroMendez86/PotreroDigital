<?php

$usuario = $_POST ["user"];
$contrasenia = $_POST ["password"];

$verUser = "admin";
$verPassword = "1234";

if ($usuario === $verUser && $contrasenia === $verPassword){
    header ("location: https://plataforma.potrerodigital.org/panel/alumno");
}else{
    header ("location: error.html");
}

?>