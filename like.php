
<?php
$idt=$_POST['id'];
echo $idt;
$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');
$query = $pdo->prepare("INSERT INTO `aimes`( `idtask`) VALUES (?)");
$query->execute([$idt]);

?>