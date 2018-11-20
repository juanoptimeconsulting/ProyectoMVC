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
        //prepara una sentencia SQL para ser ejecutada por el metodo PDOstatement, previene inyecciones sql


        
  $stmt = conexion::conectar()->prepare("INSERT INTO $nombreTabla(Nombre, Apellido,Tipodocumento, Documento,Direccion, Email, Genero,User, Estado,Fotopaciente, password) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


  return $stmt;










    }











}