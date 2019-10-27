
<!DOCTYPE html>
<html>
<head>
	<title>recherche</title>
</head>
<body>
	<div>
		
	</div>
	<form id="form1" method="POST" action="recherche2.php">
	<input type="text" name="recherche" value="Rechercher">
	<input type="button" name="submit" value="ok" onclick="getData()">
</form>
<script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>

<script type="text/javascript">
	function getData(){
	  $.ajax({  method: "POST", 
				dataType:"json",
				url: "recherche2.php", 
				success: function(x){
					$('div').html(x);
				}
		});
	}

</script>

</body>
</html>
