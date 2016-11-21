<h1>SUMA</h1>
<p>Introduce un numero para calcular la suma de números naturales hasta dicho número</p>
<?php
	if(! isset ($_POST['sumar'])){
?>
	<form action="ecf-suma.php" method="post">
		Número:<input type="number" name="numero">
		<input type="submit" value="Suma" name="sumar">
	</form>
<?php 
	}else{
		$numero=$_POST['numero'];
		$suma=0;
		for($i=0;$i<=$numero;$i++){
			$suma+=$i;
		}
	
	echo "<p>La suma de numeros hasta el número introducido es ".$suma."</p>";
	}

?>