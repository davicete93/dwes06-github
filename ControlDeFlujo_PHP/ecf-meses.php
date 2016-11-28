<html>
<head>
<style>
	.error{
		color:red;
	}
</style>
</head>
<body>
	<h1>MESES</h1>
	<p>Introduce un numero de mes o nombre del mes y si es o no un año bisiesto</p>
	<?php
		if(! isset($_POST['meses'])){
	?>
	<form action="ecf-meses.php" method="post">
	<span>MES:</span><input type="text" name="mes"></br>
	<input type="radio" value="si" name="bisiesto">Bisiesto</input></br>
	<input type="radio" value="no" name="bisiesto">No bisiesto</input></br>
	<input type="submit" value="Mostrar dias" name="meses">
	</form>
	<?php 
		}else{
			$mes=$_POST['mes'];
			$bisiesto=$_POST['bisiesto'];
			if(strcmp($bisiesto, "no")==0){
			
			switch($mes){
				case 2:
				case "febrero":
					echo "<p>El mes tiene 28 días</p>";break;
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
			}else if(strcmp($bisiesto, "si")==0){
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

