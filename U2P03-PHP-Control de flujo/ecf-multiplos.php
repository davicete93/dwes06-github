<html>
<head>
</head>
<body>
<h1>MULTIPLOS</h1>
<a href="index.php"><input type="button" name="volver" value="Volver"></a>

<?php
	echo "<h3>Mostramos los múltiplos de 3 y 5 de 1 hasta 1000</h3>";
	for($i=1;$i<=1000;$i++){
		if($i%3==0 && $i%5==0){
			echo "$i ";
		}
	}
	
	echo "<h3>Mostramos los 20 primeros múltiplos de 3 y 5</h3>";
	$contador=0;
	for($i=1;$i<=1000 && $contador<20;$i++){
		if($i%3==0 && $i%5==0){
			echo "$i ";
			$contador++;
		}
		
	}
?>
</body>
</html>