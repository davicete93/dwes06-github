<?php 
session_start();

if(!isset($_SESSION['nombre'])){
    header('Location:registro.php');
}else{
    echo "<p>Damos la bienvenida a ".$_SESSION['nombre']."</p>";

?>
<html>
<head>
</head>
<body>
	<a href="test1.php">test</a>	
</body>
</html>
<?php }?>