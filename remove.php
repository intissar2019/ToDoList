<?php

$ids=$_POST['indexes'];
print_r($ids);


$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');//
foreach($ids as $id){
	$query = $pdo->prepare("DELETE FROM tasks where id= ?");
	$query->execute([$id]);
}

header('Location: index.php');
exit();

?>