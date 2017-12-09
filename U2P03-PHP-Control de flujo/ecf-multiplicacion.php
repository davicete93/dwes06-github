<html>
<head>
</head>
<body>
	<?php 
	if(!isset($_POST['enviar'])){
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>"; method="post">
		Numero:<input type="number" name="numero"></br></br>
		<input type="submit" name="enviar" value="Enviar"></br></br>
		<a href="index.php"><input type="button" name="volver" value="Volver"></a>
	</form>
	<?php 
	}else{
	    $numero=$_POST['numero'];
	    $multiplicacion=0;
	    for($i=1;$i<=10;$i++){
	        $multiplicacion=$numero*$i;
	        echo "<h3>".$numero." por ".$i." es: ".$multiplicacion."</h3>";
	    }
	}
	?>
</body>
</html>