<html>
<head>
</head>
<body>
	<?php 
	if(!isset($_POST['enviar'])){
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>"; methos="post">
		MES: <input type="text" name="mes"></br></br>
		Bisiesto: </br>
		<input type="radio" name="bisiesto" value="SI">SI</input></br>
		<input type="radio" name="bisiesto" value="NO">NO</input></br>
		<input type="submit" name="enviar" value="Enviar"></br></br>
		<a href="index.php"><input type="button" name="volver" value="Volver"></a>
	</form>
	<?php 
	}else{
	    $mes=$_POST['mes'];
	    $bisiesto=$_POST['bisiesto'];
	    if(strcmp($bisiesto, "NO")==0){
	        switch ($mes){
	            case 2:
	            case "Febrero":
	               echo "<p>El mes tiene 28 días</p>";break;
	            case 4:
	            case "Abril":
	            case 6:
	            case "Junio":
	            case 9:
	            case "Septiembre":
	            case 11:
	            case "Noviembre":
	                echo "<p>El mes tiene 30 días</p>";break;
	            case 1:
	            case "Enero":
	            case 3:
	            case "Marzo":
	            case 5:
	            case "mayo":
	            case 7:
	            case "julio":
	            case 8:
	            case "agosto":
	            case 10:
	            case "octubre":
	            case 12:
	            case "diciembre":
	                echo "El mes tiene 31 días";break;
	        }
	    }else if(strcmp($bisiesto, "SI")==0){
	        switch($mes){
	            case 2:
	            case "febrero":
	                echo "El mes tiene 29 días";break;
	            case 4:
	            case "abril":
	            case 6:
	            case "junio":
	            case 9:
	            case "septiembre":
	            case 11:
	            case "noviembre":
	                echo "El mes tiene 30 días";break;
	            case 1:
	            case "enero":
	            case 3:
	            case "marzo":
	            case 5:
	            case "mayo":
	            case 7:
	            case "julio":
	            case 8:
	            case "agosto":
	            case 10:
	            case "octubre":
	            case 12:
	            case "diciembre":
	                echo "El mes tiene 31 días";break;
	        }
	    }else{
	        echo "<h1 class='error'>ERROR</h1>";
	    }
	}
	        
	    
	?>
</body>
</html>
