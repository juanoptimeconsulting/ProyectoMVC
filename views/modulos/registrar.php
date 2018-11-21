<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 10:54 AM
 */



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Parallax Template - Materialize</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="views/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="views/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>




    <!--metodo POST para enviar datos de manera interna"-->
    <form  method="POST"  class="col s12">


                <input name="Nombre" id="first_name" type="text" class="validate">


                <input   name="Apellido" id="last_name" type="text" class="validate">



                <input  name="Edad" id="last_name" type="number" class="validates">



    </form>




<?php


$controlador = new mvcontroller();

$controlador ->registroPersonaControlador();



?>





<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="views/js/materialize.js"></script>
<script src="views/js/init.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
