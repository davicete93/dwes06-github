<html>
<head>
</head>
<body>
<?php 
    if(!isset($_POST['enviar'])){
?>
	<form action="ecf-potencia.php" method="post">
		Base:<input type="number" name="base">
		Exponente:<input type="number" name="exponente">
		<input type="submit" name="enviar" value="Enviar">
		<a href="index.php"><input type="button" name="volver" value="Volver"></a>
	</form>
<?php 
    }else{
        $base=$_POST['base'];
        $exponente=$_POST['exponente'];
        $potencia=1;
        $contador=0;
        
        while($contador!=$exponente){
            $potencia*=$base;
            $contador++;
        }
        
        echo "<h3>El resultado de la potencia es: $potencia</h3>";  
        
    }
?>
</body>
</html>
