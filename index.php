<?php
use App\Clases\Programacion as Programacion;
include_once "includes/autoload.php";

include_once "App/vistas/insertarProgramacion.php";

$a = new Programacion();
$b = new App\Clases\Profesor();
$c = new App\Clases\Estudiante();
$d = new App\Clases\Leccion();
$cc = new App\Controladores\ControladorProgramacion();
$ca = new App\Controladores\ControladorProfesor();
$cb = new App\Controladores\ControladorEstudiante();
$cd = new App\Controladores\ControladorLeccion();