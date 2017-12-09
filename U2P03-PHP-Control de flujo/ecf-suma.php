<html>
<head>
</head>
<body>
<?php
if(!isset($_POST['enviar'])){
?>
	<form action="ecf-suma.php" method="post">
		Número:<input type="number" name="numero">
		<input type="submit" name="enviar" value="Enviar">
		<a href="index.php"><input type="button" name="volver" value="Volver"></a>
	</form>
<?php 
    }else{
        
        $suma=0;
        $numero=$_POST['numero'];
       
        for($i=0;$i<=$numero;$i++){
            $suma+=$i;
        }
        
        echo "<h3> La suma de los numero hasta el numero introducido es: $suma<h3>";
    }
?>
  
</body>
</html>
  



