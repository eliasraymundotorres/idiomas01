<?php
namespace App\Clases;

include_once "includes/autoload.php";

class Programacion{
    private $id;
    private $inicio;
    private $tipo;
    private $id_profesor;
    private $id_leccion;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function ProfesorID($id_profesor)
    {
       $this->id_profesor = $id_profesor;   
    }

    public function LeccionID($id_leccion)
    {
       $this->id_leccion = $id_leccion;   
    }

    public function datosIngreso($inicio,$tipo,$id_profesor,$id_leccion)
    {
       $this->inicio = $inicio;  
       $this->tipo = $tipo;  
       $this->id_profesor = $id_profesor;  
       $this->id_leccion = $id_leccion;   
    }

    public function insertar(){
        try{
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "INSERT INTO programacion(inicio,tipo,id_profesor,id_leccion)
                    VALUES(?,?,?,?)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $this->nombre, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->tipo, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->id_profesor, PDO::PARAM_STR);
            $stmt->bindParam(4, $this->id_leccion, PDO::PARAM_STR);
            $stmt->execute();
            $filas = $stmt->rowCount();

            $conexionDB->cerrarConexion();
            return $filas;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function mostrarProfDisponible()
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM programacion where id_profesor=$this->id_profesor ";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();

            $conexionDB->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function mostrarLeccionDisponible()
    {
        try {
            $conexionDB = new ConexionBD();
            $conn = $conexionDB->abrirConexion();
            $sql = "SELECT * FROM programacion where id_leccion=$this->id_leccion ";

            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();

            $conexionDB->cerrarConexion();
            return $resultado;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}