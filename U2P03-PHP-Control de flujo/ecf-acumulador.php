<html>
<head>
</head>
<body>
	<h3>ACUMULADOR</h3>
	<form action="ecf-acumulador.php" method="post">
	<span>Número:</span><input type="number" name="numero"></br>
	<input type="submit" value="Acumular" name="acumular">
	<a href="index.php"><input type="button" name="volver" value="Volver"></a>
	
	<?php
		if(! isset($_POST['acumular'])){
		echo '<input type="hidden" name="oculto" value="0">';
		}else{
			$numero=$_POST['numero'];
			$oculto=$_POST['oculto'];
			$suma=$numero+$oculto;
		
			if($suma<=50){
				echo "<input readonly='readonly' type='hidden' name='oculto' value='$suma'>";
			}else
			{	
				echo "<p>Has superado el límite por encima de 50 y la suma es: $suma</p>";
			}
		}
		
	?>
	
	</form>
</body>
</html>
