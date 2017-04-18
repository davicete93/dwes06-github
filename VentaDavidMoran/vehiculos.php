<html>
<head>
	<style>
	p{
		color:red;
		font-size:10px;
		text-align:justify;
	}
	.valido{
		color:green;
		font-size:10px;
	}
	</style>
	<title>Formulario de venta de coches</title>
	
</head>
<body>
	
	
	<form action="<?php $_SERVER["PHP_SELF"];?>" method="post"></br>
		<fieldset>
		<legend>Datos del vehiculo:</legend>
		<span>Marca:</span><input type="text" name="marca"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$marca=$_POST['marca'];
			if(empty($_POST['marca'])){
				echo "<p>*Este campo es obligatorio</p>";
			}
		}
		?>
		
		<span>Modelo:</span><input type="text" name="modelo"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$modelo=$_POST['modelo'];
			if(empty($_POST['modelo'])){
				echo "<p>*Este campo es obligatorio</p>";
			}
		}
		?>
		<span>Fecha compra:</span><input type="date" name="fechaCompra"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$fecha=$_POST['fechaCompra'];
			if(empty($_POST['fechaCompra'])){
				echo "<p>*Este campo es obligatorio</p>";
			}
		}
		?>
		<span>Color:</span><input type="color" name="color"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$color=$_POST['color'];
			if(empty($_POST['color'])){
				echo "<p>*Este campo es obligatorio</p>";
			}
		}
		?>
		<span>Kilometros de uso:</span><input type="number" name="kilometros"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$kilometros=$_POST['kilometros'];
			if(empty($_POST['kilometros'])){
				echo "<p>*Este campo es obligatorio</p>";
			}
		}
		?>
		<span>Precio:</span><input type="number" name="precio"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$precio=$_POST['precio'];
			if(empty($_POST['precio'])){
				echo "<p>*Este campo es obligatorio</p>";
			}
		}
		?>
		<span>Descripcion del estado del vehiculo:</span></br></br>
		<textarea rows="8" cols="50"></textarea>
		</fieldset>
		<fieldset>
		<legend>Datos del usuario:</legend>
		<span>Nombre:</span><input type="text" name="nombre"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$nombre=$_POST['nombre'];
			$valido=false;
			if(empty($_POST['nombre'])){
				$valido=false;
				echo "<p>*No ha introducido ningun nombre</p>";
			}else{
			
				$valido=true;	
			}
		}
		
		?>
		<span>Contraseña:</span><input type="password" name="contraseña"></br>
		<span>Confirmacion de contraseña:</span><input type="password" name="confirmacion"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$confirmada=$_POST['confirmacion'];
			$clave=$_POST['contraseña'];
			$valido=true;
			
			if(strlen($clave)<8){
				$valido=false;
				echo "<p>*La contraseña debe contener 8 caracteres como mínimo</p>";	
			}
			if(strlen($clave)>16){
				$valido=false;
				echo "<p>*La contraseña no debe superar los 16 caracteres</p>";
			}
			if (!preg_match('`[A-Z]`',$clave)){
				$valido=false;
				echo "<p>*La clave debe tener al menos una letra mayúscula</p>";
			}
			
			if($valido==true){
				if($confirmada==$clave){
					echo "<p class='valido'>PASSWORD CORRECTO</p>";
				}else{
					echo "<p>*Las contraseñas no coinciden</p>";
				}
				
			}
			
		}
		
		?>
		
		<span>Correo electrónico:</span><input type="email" name="correo"></br>
		<?php 
		if(isset($_POST["enviar"])){
			$email=$_POST['correo'];
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "<p class='valido'>La dirección de correo electrónico es correcta</p>";
			}else{
				echo "<p>*La dirección de correo electrónico es incorrecta</p>";
			}
		}	
		?>
		<input type="submit" name="enviar" value="Enviar">
		<?php 
		if(!isset($_POST["enviar"])){
			echo "<h3>Formulario enviado correctamente</h3>";
			echo "<table border='1'>";
			echo "<tr>";
			echo "<td>Marca:".$marca."</td>";
			echo "<td>Modelo:".$modelo."</td>";
			echo "<td>Fecha:".$fecha."</td>";
			echo "<td>Color:".$color."</td>";
			echo "<td>Kilometros:".$kilometros."</td>";
			echo "<td>Precio:".$precio."</td>";
			echo "<td>Nombre:".$nombre."</td>";
			echo "<td>Contraseña:".$clave."</td>";
			echo "<td>Correo electrónico:".$email."</td>";
			echo "</tr>";
			echo "</table>";
		}
		?>
		</fieldset>
	
	</form>
</body>
</html>
