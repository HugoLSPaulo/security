<!DOCTYPE html>
<html>
<head>
	<title>Gerar Hash</title>
</head>
<body>

	<form  method="post" action="hugohash.php">

		<label for="txtclaro">Texto claro</label>
		<input type="text" name="txtclaro" placeholder="texto claro"><br>

		
		<label for="txthash">Codigo Hash Formado</label>
		<input type="text" name="txthash" placeholder="codigo hash "><br>

		<input type="submit" name="btn" value="Gerar">
	</form>

	<?php

		$t=$_POST["txthash"];
		function gerar_hash($pega){

			$h=hash('sha512', $pega);

			echo $h;

		}

		gerar_hash($t);

		
	?>

</body>
</html>
