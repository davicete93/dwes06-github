<html>
<head>
</head>
<body>
<form action="ecf-cuadrado.php" method="post">
<span>Número:</span><input type="text" name="numero"></br>
<input type=submit value="Tabla" name="cuadrado">
</form>
<?php
	if(! isset($_POST['cuadrado'])){
		
	}else{
		$numero=$_POST['numero'];

		echo"<table border='1'>";
		for($i=1;$i<=$numero;$i++){
			echo"<tr";
			if($i%2==0){
				echo ' style="background-color:lightblue;"> ';
			}else{
				echo '>';
			}
			for($j=1;$j<=$numero;$j++){
				$producto=$i*$j;
				echo"<td style='padding:3px;text-align:center;'>".$producto."</td>";
					
			}
			echo "</tr>";
			
		}
		echo "</table>";
	}
?>

</body>
</html>

