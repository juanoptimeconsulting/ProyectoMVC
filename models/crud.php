<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 4:00 PM
 */

//va heredar la clase conexion

include_once "conexion.php";

//HACER UNA EXTENCION PARA PODE RJECUTAR LA CONEXION ALA BASE DE DATOS

/*Extencion de clases: los objetos pueden ser extendidos y pueden heredar propiedades y metodos,
para definir una clase como extencion debo definir una clase padre que en este caso vendria ser la clase conexion y se utlizadentro de una
clase hija, para poder maniuplar la funcion conectar
*/



class datos extends conexion {


   //REGISTRO DE USUARIOS
    public static function registrousuarioModelo($datosRecibidos, $nombreTabla){

        //(:)operador de resolucion de ambitos, llegar una funcion de una clase heredada
        //prepare() prepara una sentencia SQL para ser ejecutada por el metodo PDOstatement, previene inyecciones sql

    //Ahora enlazamos parametros
    $stmt = conexion::conectar()->prepare("INSERT INTO $nombreTabla
(idPaciente, Nombres, Apellidos,TipoDocumento, Documento, Direccion,
 Email, Genero,User, Password, FotoPaciente, Estado)VALUES (NULL, :Nombres, :Apellidos,:TipoDocumento,:Documento,:Direccion,:Email,:Genero, :User,:Password,:FotoPaciente,:Estado)");



    //PARAM_STR: pdo parametro de tipo String
        try{
            //bindparam enlaza los paramtreos, vincula una variable PHP en datos, a un paramtro sustitucion con nombre o simbolo de sustitucion
    $stmt->bindParam(":Nombres",$datosRecibidos["Nombres"], PDO::PARAM_STR);
    $stmt->bindParam(":Apellidos",$datosRecibidos["Apellidos"], PDO::PARAM_STR);
    $stmt->bindParam(":TipoDocumento",$datosRecibidos["TipoDocumento"], PDO::PARAM_STR);
    $stmt->bindParam(":Documento",$datosRecibidos["Documento"], PDO::PARAM_INT);
    $stmt->bindParam(":Direccion",$datosRecibidos["Direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":Email",$datosRecibidos["Email"], PDO::PARAM_STR);
    $stmt->bindParam(":Genero",$datosRecibidos["Genero"], PDO::PARAM_STR);
    $stmt->bindParam(":User",$datosRecibidos["User"], PDO::PARAM_STR);
    $stmt->bindParam(":Password",$datosRecibidos["Password"], PDO::PARAM_STR);
    $stmt->bindParam(":FotoPaciente",$datosRecibidos["FotoPaciente"], PDO::PARAM_STR);
    $stmt->bindParam(":Estado",$datosRecibidos["Estado"], PDO::PARAM_STR);


    //valor bolean
     if($stmt->execute()){

         return "succes";
     }else{
         return  var_dump($stmt)."<strong>no se registró<strong>";
     }


     $stmt->close();//finalizar conexion;






}catch (PDOException $e){
     echo "errr de registro".$e;
}






    }



    public  static  function LogeoModelo($datosRecibidosLogeo, $nombreTabla){

        //Ahora enlazamos parametros
        $stmt = conexion::conectar()->prepare("SELECT  User, Password FROM $nombreTabla WHERE Password = :Password");


        //bindParam relacion de parametros
        //$stmt->bindParam("User",$datosRecibidosLogeo["User"],PDO::PARAM_STR);
        $stmt->bindParam("Password",$datosRecibidosLogeo["Password"],PDO::PARAM_STR);


        //valor bolean
        if($stmt->execute()){


            //metodo FETCH = obtiene una fila de un conjunto de resultados asiciados al objeto PDOstatement y devuelve un arrays
            return $stmt->fetch();

        }else{
            return  "error";
        }


        $stmt->close();//finalizar conexion;



    }




     public  static function ListaUsuarios($tabla){
         $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla");

         if($stmt->execute()) {

             //obtener todas las filas con le fetch All
                          return $stmt->fetchAll();


         }
         $stmt->close();//finalizar conexion;

     }







}