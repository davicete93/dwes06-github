<?php
class Obra{
    private $id_obra;
    private $titulo;
    private $año_publicacion;
    private $genero;
    private $id_autor;
    private $imagen;
    
    function getIdObra(){
        return $this ->id_obra;
    }
    function getTitulo(){
        return $this ->titulo;
    }
    function getAñoPublicacion(){
        return $this ->año_publicacion;
    }
    function getGenero(){
        return $this ->genero;
    }
    function getIdAutor(){
        return $this->id_autor;
    }
    function getImagen(){
        return $this ->imagen;
    }
    function __toString(){
        return $this->Obra;
    }
}
?>
<html>
<head>
	<meta charset ="UTF-8">
</head>
<body>
</body>
</html>