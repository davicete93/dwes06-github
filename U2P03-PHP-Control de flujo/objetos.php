<?php
class Circunferencia{
    private $radio;
    
    function construct($radio){
        $this->$radio=$radio;
    }
    
    function getRadio($radio){
        return $this->$radio;
    }
    function calcularArea($radio){
        return $area=pi()*(pow($radio, 2));
    }
    function calcularPerimetro($radio){
        return $perimetro=2*pi()*$radio;
    }
}
?>
<html>
<head>
</head>
<body>

<?php 
if(!isset($_POST['enviar'])){
?>
	<form action="<?php echo $_SERVER["PHP_SELF"]?>"; method="post">
	<span>Radio:</span><input type="number" name="radio"></br>
	<input type="submit" name="enviar" value="Enviar">
	</form>
<?php 
}else{
   $radio=$_POST['radio'];
   $circunferencia=new Circunferencia($radio);
   $area=$circunferencia->calcularArea($radio);
   $perimetro=$circunferencia->calcularPerimetro($radio);
   echo "<p>El área de nuestra circunferencia es $area </p></br>";
   echo "<p>El perímetro de nuestra circunferencia es $perimetro</p></br>";
}
?>
</body>
</html>