<?php
echo "Inicio modelo"."<br>";

// Modelo contiene la lógica de la aplicación: clases y métodos que se comunican
// con la Base de Datos

//Creación de una clase para ejecutar la sentencia SQL
class provincias_model{
    private $db;
    private $provincias;
 
    public function __construct(){
        $this->db=Conectar::conexion();
        $this->provincias=array();
    }
    public function get_provincias(){
        $consulta=$this->db->query("select * from provincia;");
        while($filas=$consulta->fetch_assoc()){
            $this->provincias[]=$filas;
        }
        return $this->provincias;
    }
}
echo "Fin modelo"."<br>";
?>