<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 3:53 PM
 */

class conexion{




    static public  function  conectar(){


        $link = new PDO("mysql:localhost;dbname=bdprueba","root","");



 return $link;

    }






}


