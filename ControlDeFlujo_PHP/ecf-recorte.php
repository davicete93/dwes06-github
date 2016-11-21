<html>
<head>
</head>
<body>
	<h1>RECOTES</h1>
	<p>Introduce una cadena de caracteres para realizar el recorte</p>
	<?php
		if(! isset($_POST['recorte'])){
	?>
		<form action="ecf-recorte.php" method="post">
		<span>Palabra:</span><input type="text" name="palabra">
		<input type="submit" value="Recortar" name="recorte">
		</form>
	<?php 
		}else{
			$palabra=$_POST['palabra'];
			for($i=strlen($palabra)-1;$i>=0;$i--){
				for($j=0;$j<=$i;$j++){
					echo $palabra [$j];
					
				}
				echo "</br>";
			}
		}
	?>
</body>
</html>

