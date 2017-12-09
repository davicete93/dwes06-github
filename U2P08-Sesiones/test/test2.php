<?php
if(session_status() == PHP_SESSION_NONE) {
    header('Location:registro.php');
}else{
    ?>
<html>
<head>
</head>
<body>
	<p>¿Quién es el autor de la cancion "Ave Maria"?</p>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<input type="radio" name="musica1" value="1">Los Mojinos</br>
		<input type="radio" name="musica2" value="2">Malú</br>
		<input type="radio" name="musica3" value="3">David Bisbal
	</form>
<?php 
$_SESSION['respuesta']=$_POST['television3'];
if($_SESSION['respuesta']!=$_POST['musica3']){
    echo "<h3 style=color:red;>La respuesta es incorrecta</h3>";
}else{
    echo "<h3 style=color:green;>La respuesta es correcta</h3>";
}

}
?>
</body>
</html>
