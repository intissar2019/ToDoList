<?php
if(isset($_POST['submit'])){
$description=$_POST['recherche'];
$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');//
$query = $pdo->prepare("SELECT
        *
     FROM tasks where description=?");
$query->execute([$description]);
$tasks = $query->fetchAll(PDO::FETCH_ASSOC);

}
else{
	$tasks=['rien a afficher'];
}
print_r($tasks);


?>