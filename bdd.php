<?php
try {
        $bdd = new PDO('mysql:host=localhost;port=33065;dbname=swchamezadb;charset=utf8', 'root', 'toor');
} catch (Exception $e) {
        die('Error : ' . $e->getMessage());
}
