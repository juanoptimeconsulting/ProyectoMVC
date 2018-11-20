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



<div class="row">
    <!--metodo POST para enviar datos de manera interna"-->
    <form  method="POST"  class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input name="Nombre" placeholder="Placeholder" id="first_name" type="text" class="validate">
                <label for="first_name">Nombres</label>
            </div>
            <div class="input-field col s6">
                <input   name="Apellido" id="last_name" type="text" class="validate">
                <label for="last_name">Apellidos</label>
            </div>

            <div class="input-field col s6">
                <input  name="Direccion" id="last_name" type="text" class="validates">
                <label for="last_name">Direccion</label>
            </div>
        </div>
        <label>Tipo de documento</label>
        <select class="browser-default"  required id="TipoDocumento" name="TipoDocumento">
            <option value="">Seleccione</option>
            <option value="C.C">Cedula de Ciudadania</option>
            <option value="T.I">Tarjeta de Identidad</option>
            <option value="C.E">Cedula de Extranjeria</option>
            <option value="RegistroCivil">Registro Civil</option>
            <option value="RUT">Registro Unico Tributario</option>
            <option value="Otro">Otro</option>
        </select>
        <div class="input-field col s6">
            <input id="documento"  name="Documento" type="text" class="validates">
            <label for="documento">Documento</label>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email"  name="Email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>

        <label>GENERO</label>
        <select required id="Genero"  name="Genero"  class="browser-default">
            <option value="">Seleccione</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Indefinido">Indefinido</option>
        </select>
        <div class="input-field col s6">
            <input placeholder="Placeholder" name="User" minlength="7" id="first_name" type="text" class="validate">
            <label >User</label>
        </div>


        <div class="row">
            <div class="input-field col s12">
                <input id="password"   name="Password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>


        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#Password" data-match-error="Las Contraseñas no Coinciden" placeholder="Confirmar Contraseña" required>
        <div class="help-block with-errors"></div>



            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input   id="fotoPaciente" name="fotoPaciente"type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
            </div>

        <a class="waves-effect waves-light btn  "><i class="material-icons left">cloud</i>button</a>
    </form>


</div>

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
