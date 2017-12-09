<html>
<head>
</head>
<body>
	<?php 
	if(!isset($_POST['enviar'])){
	?>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Numero:<input type="number" name="numero">
		<input type="submit" name="enviar" value="Enviar">
		<a href="index.php"><input type="button" name="volver" value="Volver"></a>
	</form>
	
	<?php 
	}else{
	    $factorial=1;
	    $numero=$_POST['numero'];
	    
	    for($i=$numero;$i>=1;$i--){
	        $factorial=$factorial*$i;
	    }
	     echo "<h3>El factorial de $numero es: $factorial</h3>";
	}
	?>
</body>
</html>
