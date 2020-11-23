<?php
namespace App\Controladores;
include_once "includes/autoload.php";

class ControladorProgramacion
{
    public function guardar(String $inicio,String $tipo, Int $id_profesor, Int $id_leccion): void{
        $programacion = new Programacion();
        $programacion->datosIngreso($inicio,$tipo,$id_profesor,$id_leccion);
        $filas = $programacion->insertar();

        if($filas!=0){
            echo "Facultad guardada";
        }else{
            echo "Error: Informarcion no guardada";
        }
    }
}