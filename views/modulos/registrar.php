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

    <script>



        function llamar(){
            swal(
                {
                    title: 'Error!',
                    text: 'REGISTRADO'+msg,
                    type: 'error',
                    confirmButtonColor: '#e81a2d',
                    timer: 5000
                }
            );

        }

    </script>
</head>
<body>




    <!--metodo POST para enviar datos de manera interna"-->
    <form  method="post"  class="col s12">


                <input   name="Nombres" id="first_name" type="text" required class="validate">


        <input   name="Apellidos" id="last_name" type="text" required class="validate">



        <input  name="TipoDocumento" id="last_name" type="text" required class="validates">

        <input name="Documento" id="first_name" type="number" required class="validate">


        <input   name="Direccion" id="last_name" type="text" required class="validate">



        <input  name="Email" id="last_name" type="text"  required class="validates">


        <input name="Genero" id="first_name" type="text" required class="validate">


        <input   name="User" id="last_name" type="text" required class="validate">



        <input  name="Password" id="last_name" type="text" required class="validates">

        <input name="FotoPaciente" id="first_name" type="text" required class="validate">




        <button type="submit"  class="btn btn-default">Enviar</button>

<?php if($_GET["action"]=="echo"){?>
    <div class="row">
        <div class="col s21 m12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text center-align">
                    <span class="card-title center-align">Card Title</span>
                    <p>Usuario registrado con exito!</p>
                </div>

            </div>
        </div>
    </div>

        <?php  }else if($_GET["action"]=="error"){?>


        <div class="row">
            <div class="col s12 m5">
                <div class="card-panel teal">
        <span class="white-text">NO SE REGISTRO!
        </span>
                </div>
            </div>
        </div>

        <?php } ?>





    </form>




<?php

$controlador = new mvcontroller();


if(isset($_GET["action"])){
    if($_GET["action"]=="registrar" ){

        $controlador ->registroPersonaControlador();


    }/*elseif ($_GET["action"]=="echo"){
        echo "<strong>REGISTRO EXITOSO!</strong>";

    }
    /*
    $controlador = new mvcontroller();

    $controlador ->registroPersonaControlador();

    if($_GET["action"]){

        if($_GET["action"]=="echo"){
            echo  "<h1> Registro logrado!</h1>";

        }
    }
    */
}

?>





<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="views/js/materialize.js"></script>
<script src="views/js/init.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
