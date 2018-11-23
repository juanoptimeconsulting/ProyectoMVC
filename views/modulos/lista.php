
<?php

session_start();
if(!$_SESSION["validar"]){ //la variable de sesion no es verdadera(falsa) redirige a ingreso


    header("location:index.php?action=logeo");


    exit();//finalizar un script de php, para evadir atacante malisioso
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>


<table class="highlight"     >
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Tipo Documento</th>
    </tr>
    </thead>

    <tbody>




<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 10:54 AM
 */



$recibeLista = new mvcontroller();
$recibeLista->listaUsuariosController();







?>
    </tbody>
</table >
</body>
</html>