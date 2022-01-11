<?php
class EnlacesModelo
{
    public function __construct()
    {
        
    }
    
    public function enlacesModelo($link)
    {
        //guardamos la ruta en un arreglo
        $ruta = explode("/", $link);
        // var_dump($ruta);

        if (
            $ruta[0] == "inicio" ||
            $ruta[0] == "objetivosAnalitica" ||
            $ruta[0] == "perfilAnalitica" ||
            $ruta[0] == "instructoresAnalitica" ||
            $ruta[0] == "pagosAnalitica" ||
            $ruta[0] == "objetivosInteligencia" ||
            $ruta[0] == "perfilInteligencia" ||
            $ruta[0] == "instructoresInteligencia" ||
            $ruta[0] == "pagosInteligencia" ||
            $ruta[0] == "pagos" ||
            $ruta[0] == "contacto")
        {
            # agregamos la modúlo según el enlace obtenido del url
            $modulo = "vistas/modulos/".$ruta[0].".php";
        }
        elseif($ruta[0] == "index")
        {
            $modulo = "vistas/modulos/inicio.php";
        }
        elseif($ruta[0] == "success")
        {
            $modulo = "vistas/modulos/pagos.php";
        }
        elseif($ruta[0] == "canceled")
        {
            $modulo = "vistas/modulos/pagos.php";
        }
         else {
            $modulo = "vistas/modulos/inicio.php";
        }

        return $modulo;
    }
}
