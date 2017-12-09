<html>
<head>
</head>
<body>
<?php 
if (!isset($_POST['enviar'])){
?>
<form action="ecf-diferencia.php" method="post">
Numero A:<input type="number" name="A"></br>
Numero B:<input type="number" name="B"></br></br>
<input type="submit" name="enviar" value="Enviar"></br></br>
<a href="index.php"><input type="button" name="volver" value="Volver"></a>
</form>
</body>
</html>



<?php
}else{
   $numA=$_POST["A"];
   $numB=$_POST["B"];
   
   while($numA<$numB || $numB<$numA){
       if($numA<$numB){
           echo "<b>*</b>";
           $numA++;
       }else if($numB<$numA){
           echo "<b>*</b>";
           $numB++;
       }else{
           echo "<b>Los numeros son iguales</b>";
       }
   }
   echo "</br>";
   $c=$_POST["A"];
   $d=$_POST["B"];
   if($c<$d){
       for($i=$c;$i<$d;$i++){
           echo "<b>#</b>";
       }
   }else if($d<$c){
       for($i=$d;$i<$c;$i++){
           echo "<b>#</b>";
       }
   }else{
       echo "<p>Los números son iguales</p>";
   }
   
}
?>