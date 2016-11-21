<html>
<head>
</head>
<body>
	<h1>FACTORIAL</h1>
	<p>Introduce un número para realizar el factorial</p>
	<?php
	if(! isset($_POST['factorial'])){
	?>
	<form action="ecf-factorial.php" method="post">
	<span>Número:</span><input type="number" name="numero">
	<input type="submit" value="Realizar factorial" name="factorial">
	</form>
	
	<?php 
	}else{
		$numero=$_POST['numero'];
		$factorial=1;
		for($i=$numero;$i>=1;$i--){
			$factorial*=$i;
		}
		echo "<p>El factorial del número introducido es ".$factorial."</p>";
	}
	?>
</body>
</html>

