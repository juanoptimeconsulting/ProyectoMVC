<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 9:45 AM
 */


class mvcontroller
{


//crear una funcion publica para llamar la plantilla
    public function plantilla()
    {

        //metodo para incluir otro archivo php
        include "views/templates.php";
    }

    public function enlacespaginasController()
    {


//isset trae contenido
        if (!empty($_GET['action'])) {//la variable trae informacion
            //
            $enlacesenviados = $_GET['action'];

            //manera de eredar la clase enlaces models
            $respuesta = enlacesPaginas::enlacespaginasmodels($enlacesenviados);

            include $respuesta;

        }
    }


    //REGISTRO DE PERSONA
    public function registroPersonaControlador(){


        // ALMACENARLOS EN UNOS SOLO CON UN ARRAY

        $datosControlador = array("Nombre"=>$_POST["Nombre"],
           "Apellido"=> $_POST["Apellido"],
           "TipoDocumento"=> $_POST["TipoDocumento"],
            "Documento"=>$_POST["Documento"],
            "Direccion"=>$_POST["Direccion"],
            "Email"=> $_POST["Email"],
           "Genero"=> $_POST["Genero"],
            "User"=>$_POST["User"],
            "Estado"=>$_POST["Estado"],
            "FotoPaciente"=>$_POST["FotoPaciente"],
           "Password"=> $_POST["Password"]);

              $respuestademodelo =  datos::registrousuarioModelo($datosControlador, "paciente");// traer los datos de la funcion que esta en la clase datos

                   echo $respuestademodelo;

















    }
}










