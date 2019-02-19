<?php
echo "Inicio del controlador"."<br>";
//Llamada al modelo -- Intermediario entre vista y modelo !!!
require_once("models/provincias_model.php");


$provincia=new provincias_model();
$datos=$provincia->get_provincias();

//Llamada a la vista -- Intermediario entre vista y modelo !!!
require_once("views/provincias_view.phtml");
echo "Fin controller"."<br>";
?>