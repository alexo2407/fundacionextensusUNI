<?php 

class EnlacesControlador
{
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

        $respuestaEnlace = EnlacesModelo::enlacesModelo($link);

        // var_dump($respuestaEnlace);

        include $respuestaEnlace;

    }
}
