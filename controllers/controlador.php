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

    if($_POST){



    if(isset($_GET["Nombres"]) || $_GET["action"]=="registrar"){

        /* Subir Foto */
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
            array(
                "Nombres"=>$_POST["Nombres"],
                "Apellidos"=> $_POST["Apellidos"],
                "TipoDocumento"=> $_POST["TipoDocumento"],
                "Documento" => $_POST["Documento"],
                "Direccion"=> $_POST["Direccion"],
                "Email"=> $_POST["Email"],
                "Genero"=> $_POST["Genero"],
                "User"=> $_POST["User"],
                "Password"=>$_POST["Password"],
                "FotoPaciente"=>$_POST["FotoPaciente"],
                "Estado" => "Activo");


        $reinstatement =  datos::registrousuarioModelo($datosControlador, "paciente");// traer los datos de la funcion que esta en la clase datos
      /*  var_dump($reinstatement);*/
        echo $reinstatement;


        if($reinstatement=="succes"){

            header("location:index.php?action=echo");

        }else{
            header("location:index.php?action=error");

        }


    }

    }else{

        echo "----ERROR----";
       // header("location:index.php?action=error");
    }
}catch (Exception $ex){
    echo "error de registro controler".$ex;
}



}



//LOGEO DE USUARIO


    public static  function logeo(){

        if($_POST) {


            if (empty($_GET["PasswordIngreso"])  )  {

// ALMACENARLOS EN UNOS SOLO CON UN ARRAY lOS DATOS
                $datosControlador =
                    array(
                        "User" => $_POST["UserIngreso"],
                        "Password" => $_POST["PasswordIngreso"]);

                $recibe = datos::LogeoModelo($datosControlador, "paciente");




                if($recibe["User"]== $_POST["UserIngreso"] && $recibe["Password"]== $_POST["PasswordIngreso"]){


                session_start();//INICIAMOS SESION
                    $_SESSION["validar"]= true;//VARIABLE SESION
                    header("location:index.php?action=lista");

                }else if($recibe==false) {

                    // var_dump($recibe["Password"]);
                    header("location:index.php?action=erroringreso");
                }

            }else{
                echo "error sin catch";
            }


        }else{
            echo "no entra get";
        }


    }

//LISTA DE USUARIOS:

 public  static  function listaUsuariosController()
 {


     $respuesta = datos::ListaUsuarios("paciente");

//var_dump($respuesta[5][6]);
     //utilizamos for each, itera sobre arreglos y objetos
     foreach ($respuesta as $dato => $item) {


         echo '
      
          <tr>
            <td>' . $item["Nombres"] . '</td>
            <td>' . $item["Apellidos"] . '</td>
            <td>' . $item["TipoDocumento"]  . '</td>
          </tr>
          
    ';
     }
 }






















}










