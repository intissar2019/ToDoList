<?php
$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');//
$query = $pdo->prepare("SELECT
        *
     FROM tasks");
$query->execute();
$tasks = $query->fetchAll(PDO::FETCH_ASSOC);
$now=date_create();

include 'index.phtml';

?>