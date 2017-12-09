<html>
<head>
</head>
<body>
	<?php 
	if(!isset($_POST['enviar'])){
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>"; method="post">
		Cadena: <input type="text" name="cadena"></br></br>
		<input type="submit" name="enviar" value="Enviar"></br></br>
		<a href="index.php"><input type="button" name="volver" value="Volver"></a>
	</form>
	<?php 
	}else{
	    $palabra=$_POST['cadena'];
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
