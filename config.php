<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpasswoard = '1234';
$dbname = 'formulario';

$conexão = new mysqli($dbhost,$dbusername,$dbpasswoard,$dbname)

if ($conexão->connect_error) 
{
    echo "Erro";
}
else
{
     echo "Conexão efetuaaada com sucesso";
}
?>