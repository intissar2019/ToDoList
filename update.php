<?php

if(isset($_GET['id'])){
	
$id=$_GET['id'];



$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');//

	$query = $pdo->prepare(
	"Select * from tasks 
	where id= :xx");
	$t=[":xx"=>$id];
	$query->execute($t);
	$task = $query->fetch(PDO::FETCH_ASSOC);
	$priority1="";
	$priority2="";
	$priority3="";
switch ($task["priority"]) {
    case 'priority-low':
	$priority1="checked";
        break;
    case 'priority-normal':
	$priority2="checked";
        break;
    case 'priority-high':
	$priority3="checked";
        break;
    default:
}

//2022-09-01

$date = DateTime::createFromFormat("Y-m-d", $task['date_task']);
$day1 = $date->format("d");
$month1 = $date->format("m");
$year1 = $date->format("Y");

include "update.phtml";
}


if(isset($_POST['title'])){
	
$id=$_POST['idtask'];
$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
$pdo->exec('SET NAMES UTF8');//

$query = $pdo->prepare("UPDATE `tasks` SET `titre`=?,`description`=?,`date_task`=?,`priority`=? WHERE id=?");
	$day=date($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']);
	$tab=[
	$_POST['title'],$_POST['description'],
	$day,$_POST['priority'],$id
	];
$query->execute($tab);


}
header('Location: index.php');
exit();	




?>