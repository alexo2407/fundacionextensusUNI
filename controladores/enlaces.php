<?php 

class EnlacesControlador
{

    public function __construct()
    {
        
    }

    public function enlacesControlador()
    {
        //evaluamos si existe el enlace a traves de la peticion GET
        if (isset($_GET['enlace']))
        {
           $link = $_GET['enlace'];
        }
        else
        {
            $link = 'index';
        }


        $respuestaEnlace = new EnlacesModelo();
        $respuesta =  $respuestaEnlace->enlacesModelo($link);

        // var_dump($respuesta);

        include $respuesta;

    }
}
