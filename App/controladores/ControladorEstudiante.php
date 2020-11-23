<?php
namespace App\Controladores;
include_once "includes/autoload.php";

class ControladorEstudiante
{
    public function guardar(String $nombre, String $email): void{
        $estudiante = new Estudiante();
        $estudiante->datosIngreso($nombre,$email);
        $filas = $estudiante->insertar();

        if($filas!=0){
            echo "Docente guardado";
        }else{
            echo "Error: Informarcion no guardada";
        }
    }
}