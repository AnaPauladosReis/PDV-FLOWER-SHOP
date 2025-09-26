<?php

require_once ('config.php');

date_default_timezone_set('America/Sao_Paulo');

//$pdo = new PDO('mysql:host=localhost;dbname=FlowerShop', 'root', '');

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");
} catch (PDOException $e) {
    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
}

?>