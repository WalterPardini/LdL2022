<?php
require_once 'medoo.php';
use medoo\medoo;

// Inicializamos medoo
$database = new medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'medoo_prueba',
    'username' => 'root',
    'password' => '',
]);







