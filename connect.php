<?php 

try {

    $db = new PDO('mysql:host=localhost;dbname=workshop2', 'root', '');
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e) {
    echo 'Erreur : '. $e->getMessage();
    die();
}