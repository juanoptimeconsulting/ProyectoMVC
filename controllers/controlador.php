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
        $datosControlador =
            array("Nombres"=>"juan",
            "Apellidos"=> "juanddsddddd",
            "TipoDocumento"=> "T.I",
            "Documento" => 12312334,
            "Direccion"=> "dfdf",
            "Email"=> "sadasd",
            "Genero"=> "Masculino",
            "User"=> "asdasdffddd",
            "Password"=>"123123123",
            "FotoPaciente"=>"19-Apr-07-Soccer_Ball_48px.png",
            "Estado" => "Activo");



        $reinstatement =  datos::registrousuarioModelo($datosControlador, "paciente");// traer los datos de la funcion que esta en la clase datos

        echo $reinstatement;

    }else{
        echo "error";
    }


}catch (Exception $ex){
    echo "error de registro controler".$ex;
}



}


















}










