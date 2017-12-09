<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
    $error="";
}


if (isset($_REQUEST["cerrarSesion"])) {
    $_SESSION=array();
    session_unset();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
    }
    session_destroy();
}

if(isset($_POST['enviar'])){
    if(empty($_POST['nombre'])){
        $error="<p>El campo esta vacío</p>"; 
    }else{
        $_SESSION['nombre']=$_POST['nombre'];
    }
}
?>
<html>
<head>
</head>
<body>
	<?php 
	if(!empty($_SESSION['nombre'])){
	    echo "<p>Damos la bienvenida a ".$_SESSION['nombre']."</p>";
	}else{
	?>
	
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		Nombre:<input type="text" name="nombre">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php 
	}
	?>
	<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>
	<?php 
	if(!empty($error)){
	    echo "<p>".$error."</p>";
	}
	?>
</body>
</html>