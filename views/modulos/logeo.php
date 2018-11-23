<?php
/**
 * Created by PhpStorm.
 * User: JDIAZ
 * Date: 20/11/2018
 * Time: 10:54 AM
 */




$objetollegada = new mvcontroller();


if(isset($_GET["action"]) ) {
    //se coloco con action == erroringreso porque no volvia a validar al comeeter un error en el formulario y gracias este condicional ya entra y valida
    if ($_GET["action"] == "logeo" || $_GET["action"]=="erroringreso" ) {

        $objetollegada->logeo();


    }

}





?>


<form class="col s12" method="post">
    <div class="row">
        <div class="input-field col s6">
            <input name="UserIngreso" id="input_text" type="text" data-length="10">
            <label for="input_text">Input text</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input name="PasswordIngreso" id="password" type="password" class="validate">
            <label for="password">Password</label>
        </div>
    </div>




    <button type="submit"  class="btn btn-default">Enviar</button>



</form>


<?php if( $_GET["action"]=="erroringreso" )
{
    ?>
    <div class="row">
        <div class="col s12 m5">
            <div  class="card-panel teal  center-align" >
        <span class="white-text">ERROR DE INICIO
        </span>
            </div>
        </div>
    </div>
    <?php
}?>






