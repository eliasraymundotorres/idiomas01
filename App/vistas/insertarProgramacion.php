<?php 
 
  include_once "App/clases/Profesor.php";
  use App\Clases\Profesor;
  $prof = new Profesor();
  $resultado = $prof->mostrar();
  
 ?>
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="inicio" placeholder="Inicio"><br>
    <select name="tipo">
    	<option value="normal">Normal</option>
    	<option value="premium">Premium</option>
    </select><br>
    <select name="docente">
    	<?php 
           foreach ($resultado as $key => $value) {
           	  echo '<option value="'.$value['id'].'">'.$value['nombre'].'</option>';
           }
    	 ?>
    </select><br>
    <select name="leccion">
    	<option>...</option>
    </select><br>

    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(!empty($_POST)){
   $inicio = $_POST["inicio"];
   $tipo = $_POST["tipo"];
   $docente = $_POST["docente"];
   $leccion = $_POST["leccion"];
   include_once "clases/ControladorProgramacion.php";
   $controladorprogramacion = new ControladorProgramacion();
   $controladorprogramacion->guardar($inicio,$tipo,$docente,$leccion);
}
