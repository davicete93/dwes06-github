<html>
<head>
</head>
<body>



<h1>DIFERENCIA</h1>
<p>Introduce dos números para realizar la diferencia con asteriscos</p>
<?php 
	if(! isset ($_POST['operar'])){
?>
	<form action="ecf-diferencia.php" method="post">
		<span>Numero 1:</span><input type="number" name="numero1">
		<span>Numero 2:</span><input type="number" name="numero2">
		<input type="submit" value="Realizar operacion" name="operar">
	</form>
<?php 	


	}else{
		
		$numero1=$_POST['numero1'];
		$numero2=$_POST['numero2'];
		if(!($numero1>10 || $numero1<1) && !($numero2>10 || $numero2<1)){
		while($numero1!=$numero2){
	
			if($numero1<$numero2){
			$numero1++;
			echo "*";
			}else if($numero2<$numero1){
			$numero2++;
			echo "*";
			}	
		}
		echo "</br>";
		
		$numero1=$_POST['numero1'];
		$numero2=$_POST['numero2'];

		if($numero1<$numero2){
			for($i=$numero1;$i<$numero2;$i++){
				
				echo "#";
			}
		}else{
			for($i=$numero2;$i<$numero1;$i++){
				
				echo "#";
			}
		}
		}else{
			echo "<h1>ERROR</h1>";
		}
	}
		
	
?>
</body>
</html>