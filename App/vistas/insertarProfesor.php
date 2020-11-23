<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="idioma" placeholder="Idioma">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
   $nombre = $_POST["nombre"];
   $idioma = $_POST["idioma"];
   include_once "controladores/ControladorProfesor.php";
   $controladorFacultad = new ControladorProfesor();
   $controladorFacultad->guardar($nombre,$idioma);
}
