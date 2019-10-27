<?php

if(isset($_POST['title'])){
$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');//

$query = $pdo->prepare("INSERT INTO `tasks`( `titre`, `description`, `date_task`, `priority`) VALUES (?,?,?,?)");
	$day=date($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']);
	$tab=[
	$_POST['title'],$_POST['description'],
	$day,$_POST['priority']
	];
$query->execute($tab);


}
header('Location: index.php');
exit();	
?>