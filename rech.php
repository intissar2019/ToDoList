<?php
$pdo = new PDO('mysql:host=localhost;dbname=testdb2', 'root', '');
$pdo->exec('SET NAMES UTF8');
$query1 = $pdo->prepare("SELECT * FROM tasks ");
$query1->execute();
$task = $query1->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img{
			width: 200px;
		}
		i{
			font-size: 2rem;

		}
	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


</head>
<body>
	<form action="datasearch.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php foreach ($task as $key => $value) {?>
	# code...

	<div>
		<h3><?=$value['titre']?></h3>
		<p><?=$value['description']?></p>
		<img src="uploads/<?=$value['imgtask']?>">
		<button id="like"><i class="fas fa-heart" ></i></button>
		<input type="hidden" name="idt" value="<?=$value['id']?>">
	</div>
<?php	}
?>
	<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script>
$( "#like" ).click(function(e) {
		var id=$("#idt").val();
$.ajax({ url : 'like.php', type : 'POST',dataType:'JSON',data:id, success : function(result){ 
	$('like').css('color','red');	
                    
               } });
		

	});



</script>

</body>
</html>