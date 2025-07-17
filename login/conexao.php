<?php

$usuario= 'root';
$senha= '';
$database= 'login';
$host = 'localhost';

$mysqli = new mysqli(hostname: $host,username: $usuario, password: $senha,database: $database);

if ($mysqli->connect_error) {
    die('Falha ao conectar com o banco de dados'. $mysqli->connect_error);
}