<?php 

class PlantillaControlador
{
    public function __construct()
    {
        
    }
    public function plantilla()
    {
        # incluimos la vista de la plantilla principal
        include "vistas/plantilla.php";
    }
}