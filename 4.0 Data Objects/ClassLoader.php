<?php
function loader($className){

    //user
    //

    //echo $className."<br>";
    require_once $className.".php";//Databasw.php Crud.php

}
spl_autoload_register("loader");