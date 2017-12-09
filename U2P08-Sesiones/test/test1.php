<?php
session_start();
if(!isset($_SESSION['nombre'])) {
    header('Location:registrox.php');
}else{
?>
<html>
<head>
</head>
<body>
	<p>¿En qué canal de televisión emiten Gran Hermano?</p>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="radio" name="television" value="1">Antena 3
		<input type="radio" name="television" value="2">Telecinco
		<input type="radio" name="television" value="3">LaSexta
	</form>
<?php 
$_SESSION['respuesta1']=$_POST['television'];
header('Location:test2.php');
?>
</body>
</html>
<?php }?>