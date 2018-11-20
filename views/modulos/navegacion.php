<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 10:16 AM
 */
?>

<!--enviar vairables GET atraves de URL-->
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">inicio</a></li>
        </ul>

        <ul class="right hide-on-med-and-down">
            <!--variable get = ? y nombre de la variable en esta caso es action y para donde dirigirse-->
            <li><a href="index.php?action=registrar">Registrar</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php?action=logeo">Logeo</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php?action=lista">Lista</a></li>
        </ul>


        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">1</a></li>
        </ul>



        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    </div>
</nav>
