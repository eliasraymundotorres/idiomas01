<?php
namespace App\Controladores;
include_once "includes/autoload.php";

class ControladorProfesor
{
    public function guardar(String $nombre, String $idioma): void{
        $profesor = new Profesor();
        $profesor->datosIngreso($nombre,$idioma);
        $filas = $profesor->insertar();

        if($filas!=0){
            echo "Docente guardado";
        }else{
            echo "Error: Informarcion no guardada";
        }
    }
}