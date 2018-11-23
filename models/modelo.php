<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 11:24 AM
 */

class enlacesPaginas{



//CONTENIDOS MODULARES
   static  public   function  enlacespaginasmodels($enlacesrecibidos){
        try{
            if($enlacesrecibidos == "lista" || $enlacesrecibidos == "logeo" || $enlacesrecibidos == "registrar"){

                //direccion de la pagina que estoy retornando
                $modulo = "views/modulos/".$enlacesrecibidos.".php";


            }else if($enlacesrecibidos=="echo"){

                $modulo = "views/modulos/registrar.php";

            }else if($enlacesrecibidos=="erroringreso") {

                $modulo = "views/modulos/logeo.php";
            }else {
                $modulo = "views/modulos/respuestaerror.php";

            }


        }catch (Exception $ex){
          $message =    $ex ->getMessage();
            echo $message;
        }
return $modulo;

    }










}


?>

