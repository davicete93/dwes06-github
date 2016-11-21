<html>
<head>
</head>
<body>
	<h1>ACUMULADOR</h1>
	<p>Introduce numeros para ir sumando al acumulador</p>
	<form action="ecf-acumulador.php" method="post">
	<span>Número:</span><input type="number" name="numero"></br>
	<input type="submit" value="Acumular" name="acumular">
	
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
				echo "<p>Has superado el límite por encima de 50</p>";
			}
		}
		
	?>
	
	</form>
</body>
</html>


