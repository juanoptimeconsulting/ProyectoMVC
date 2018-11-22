<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 3:53 PM
 */

class conexion{




     public static  function  conectar(){


        $link = new PDO("mysql:host=localhost;dbname=odonto","root","");



 return $link;

    }






}


