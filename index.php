<?php
//obligatrio para el funcionamiento del programa, funciona de igual que require, pero con le once para requerir un vaez
require_once "controllers/controlador.php";//conexion al index php
require_once "models/modelo.php";
require_once "models/crud.php";




$mvc = new mvcontroller();//objeto de la clase mv controller


$mvc -> plantilla(); //traer la duncion de la plantilla



//$mvc->registroPersonaControlador();

/*
if(isset($_GET["action"])){

    if($_GET["action"]=="echo"){
        echo  "<h1> Registro logrado!</h1>";

    }
}*/




















?>
