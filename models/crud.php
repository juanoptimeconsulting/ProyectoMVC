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
    $stmt = conexion::conectar()->prepare("INSERT INTO $nombreTabla(id, Nombre, Apellido,Tipodocumento, Documento,Direccion, Email, Genero,
Users, Estado, FotoPaciente,Edad)VALUES (NULL, :Nombre, :Apellido,:Tipodocumento,:Documento,:Direccion,:Email,:Genero, :Users,:Estado,:FotoPaciente,:Pass)");


    //bindparam enlaza los paramtreos, vincula una variable PHP en datos, a un paramtro sustitucion con nombre o simbolo de sustitucion

    //PARAM_STR: pdo parametro de tipo String
        try{
    $stmt->bindParam(":Nombre",$datosRecibidos["Nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":Apellido",$datosRecibidos["Apellido"], PDO::PARAM_STR);
    $stmt->bindParam(":Tipodocumento",$datosRecibidos["Tipodocumento"], PDO::PARAM_STR);
    $stmt->bindParam(":Documento",$datosRecibidos["Documento"], PDO::PARAM_INT);
    $stmt->bindParam(":Direccion",$datosRecibidos["Direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":Email",$datosRecibidos["Email"], PDO::PARAM_STR);
   $stmt->bindParam(":Genero",$datosRecibidos["Genero"], PDO::PARAM_STR);
    $stmt->bindParam(":Users",$datosRecibidos["Users"], PDO::PARAM_STR);
    $stmt->bindParam(":Estado",$datosRecibidos["Estado"], PDO::PARAM_STR);
   $stmt->bindParam(":FotoPaciente",$datosRecibidos["FotoPaciente"], PDO::PARAM_STR);
    $stmt->bindParam(":Pass",$datosRecibidos["Pass"], PDO::PARAM_STR);

    //valor bolean
     if($stmt->execute()){

         return "success";
     }else{
         return "no se registro";
     }








}catch (Exception $e){
     echo "errr de registro".$e;
}






    }











}