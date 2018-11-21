<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 9:45 AM
 */

include_once "models/General.php";


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
    public static function registroPersonaControlador(){


try{
    /* Subir Foto */
    if(empty($_GET["Nombre"])){
/*
        $archivoImagen = $_FILES['FotoPaciente'];
        $resultUpload = General::uploadFile($archivoImagen,array("Ruta" => "../Fotos/Pacientes/"));
        if ($resultUpload["Result"] == true){
            $arrayPaciente['Foto'] = $resultUpload["Ruta"];
        }else{
            header("Location: ../views/modulos/registrar.php?respuesta=error&Mensaje=".$resultUpload["Error"]);
        }*/
        // ALMACENARLOS EN UNOS SOLO CON UN ARRAY lOS DATOS
        $datosControlador = array("Nombre"=>"juan",
            "Apellido"=> "juan",
            //"TipoDocumento"=>"juan",
            //"Documento"=>"1111",
         //   "Direccion"=>"123123",
          //  "Email"=> "asdas@asdas",
           // "Genero"=> "asd",
          //  "Users"=>"qeqwe",
          //  "Estado" => "Activo",
            //"FotoPaciente"=>"sadasd.png",
            "Edad"=>12);



        $respuestademodelo =  datos::registrousuarioModelo($datosControlador, "persona");// traer los datos de la funcion que esta en la clase datos

        echo $respuestademodelo;

    }else{
        echo "error";
    }


}catch (Exception $ex){
    echo "error de registro controler".$ex;
}



}


















}










