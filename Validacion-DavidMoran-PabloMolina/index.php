<html>
<head>
	<style>
	h3{
	color:red;
	font-size:10pt;
	}
	.telefono{
	font-style:bold;
	color:black;
	}
	.ciclo{
	color:black;
	}
	</style>
</head>
<body>
	<fieldset>
	<legend>Datos Personales:</legend>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
		
		Nombre:<input type="text" name="nombre">
		<?php 
		
		
		if(isset($_POST['enviar'])){
		    $nombre=$_POST['nombre'];
		    $valido=true;
		  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["nombre"])){
		     
		      $valido=false;
		      echo "<h3>*No se admiten caracteres especiales</h3>";
		  }
		  elseif(empty($_POST['nombre'])){
		      $valido=false;
		      echo "<h3>*Campo obligatorio</h3>";  
		   
		  }else{
		      $valido=true;
		      echo "<p>".$nombre."</p>";
		      }
		     
		  
		}
		

		?>
		
		Apellido:<input type="text" name="apellido"><br>
		<?php 
		if(isset($_POST['enviar'])){
		    $apellido=$_POST['apellido'];
		    $valido=true;
		  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["apellido"])){
		     
		      $valido=false;
		      echo "<h3>*No se admiten caracteres especiales</h3>";
		  }
		  elseif(empty($_POST['apellido'])){
		      $valido=false;
		      echo "<h3>*Campo obligatorio</h3>";  
		  }else{
              $valido=true;
		      echo "<p>".$apellido."</p>";
		  }
		  
		}
		?>
		Contraseña:<input type="password" name="contraseña"><br>
		<?php 
		if(isset($_POST['enviar'])){
		    $contraseña= $_POST['contraseña'];
		    $valido=true;
		    if(!preg_match("/^[a-zA-Z 0-9]*$/",$_POST["contraseña"])){
		        $valido=false;
		        echo "<h3>*No se admiten caracteres especiales</h3>";
		    }elseif(empty($_POST['contraseña'])){
		        echo "<h3>*Campo obligatorio</h3>";
		    }else{
		       echo "<p>$contraseña</p>";
		    }
		                 
		}
		
		
		/*if(strlen($contraseña)<8 || strlen($contraseña)>8){
		            echo "<h3>*La contraseña no puede tener menos ni más de 8 caracteres</h3>";
		        }else{
		            if (!preg_match('`[a-z]`',$contraseña)){
		                $error_clave = "La clave debe tener al menos una letra minúscula";
		                return false;
		            }elseif (!preg_match('`[A-Z]`',$contraseña)){
		                $error_clave = "La clave debe tener al menos una letra mayúscula";
		                return false;
		            }else{
		
		*/
		
		?>
		Teléfono:<input type="number" name="telefono">
		<?php 
		if(isset($_POST['enviar'])){
		   $telefono=$_POST['telefono'];
		   $valido=true;
		   
		   if(is_numeric($telefono)){
		     if(strlen($telefono)>9 || strlen($telefono)<9){
		         $valido=false;
		         echo "<h3>*El telefono debe tener 9 digitos</h3>";
		     }else{
		         $valido=true;
		         echo "<h3 class='telefono'>$telefono</h3>";
		     }
		   }elseif(empty($_POST['telefono'])){
		       echo "<h3>*Campo obligatorio</h3>";
		   }else{
		       $valido=false;
		       echo "<h3>*El número de teléfono no es válido</h3>";
		   }
		}
		?>
		Email:<input type="text" name="email">
		<?php 
		if(isset($_POST['enviar'])){
		    $email=$_POST['email'];
		    $valido=true;
		    
		    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		        $valido=false;
		        echo "<h3>*No es un email válido</h3>";
		    }elseif(empty($_POST['email'])){
		        echo "<h3>*Campo obligatorio</h3>";
		    }else{
		        echo "<p>$email</p>";
		  }
	   }
		?>
		Fecha de nacimiento:<input type="date" name="fecha"></br>
		Direccion:<input type="text" name="direccion"></br>
		Ciclo formativo:<select name="ciclos">
		<option selected value="0">Elige un ciclo</option>
		<option value="Enfermeria">Enfermeria</option>
		<option value="DAW">DAW</option>
		<option value="Educacion Infantil">Educacion infantil</option>
		<option value="Administracion y finanzas">Administracion y finanzas</option>
		</select>
		<?php 
		if(isset($_POST['enviar'])){
		    echo "<h3 class='ciclo'>".$_POST['ciclos']."</h3>";
		}
		
		?>
		
	<br>	
	<input type="submit" name="enviar" value="Enviar">
	</form>
	</fieldset>
</body>
</html>