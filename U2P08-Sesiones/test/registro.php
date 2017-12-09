<?php
if(session_status() != PHP_SESSION_NONE) {
    header('Location:index.php');
}else{
?>
<?php 
    if(isset($_POST['enviar'])){
        session_start();
        $_SESSION['nombre']=$_POST['nombre'];
       header('Location:index.php');
?>
<html>
<head>
</head>
<body>
<?php 
    }else{
?>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		Nombre:<input type="text" name="nombre">
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php 
	}
}
	?>
</body>
</html>

