<?php
//obligatrio para el funcionamiento del programa, funciona de igual que require, pero con le once para requerir un vaez
require_once "controllers/controlador.php";//conexion al index php
require_once "models/modelo.php";




$mvc = new mvcontroller();//objeto de la calse mv controller


$mvc -> plantilla(); //traer la duncion de la plantilla
























?>
