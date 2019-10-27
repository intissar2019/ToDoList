<?php


$lien=$_FILES["fileToUpload"]["name"];
echo $lien;
$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');
$titre='testimg';
$desc='descri img ';

$query = $pdo->prepare("INSERT INTO `tasks`( `titre`, `description`, `imgtask`) VALUES (?,?,?)");
	
		

$query->execute([$titre,$desc,$lien]);








//$task = $query->fetchAll(PDO::FETCH_ASSOC);
//echo json_encode($task);




/*
print_r($_FILES['nom']);
if ($_FILES['icone']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['icone']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";






/*
$_FILES['icone']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['icone']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['icone']['size']     //La taille du fichier en octets.
$_FILES['icone']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['icone']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.



$des=$_POST['description'];
echo $des;


$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');//






$query = $pdo->prepare("SELECT
        *
     FROM tasks having titre like '%".$des."%' ");
	
		

$query->execute();
$task = $query->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($task);
//
*/	
header ("location:rech.php");	

?>