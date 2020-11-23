<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="email" placeholder="Correo">
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   include_once "controladores/ControladorEstudiante.php";
   $controladorFacultad = new ControladorEstudiante();
   $controladorFacultad->guardar($nombre,$email);
}
