<?php
session_start();
$conexion = mysqli_connect(
    'localhost:33065',
    'root',
    'toor',
    'swchamezadb'
);


try {
    $bbd = new PDO('mysql:host=localhost;port=33065;dbname=swchamezadb;charset=utf8', 'root', 'toor');
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}
