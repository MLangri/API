<?php

//require_once 'Classes\Database.php';
//require_once 'Classes/Main.php';
//require_once 'Design/Main.php';

//since they're both called Main.php we use aliases(the keyword 'use' is applied) and namespaces

//aliasing
use Classes\Main as CMain;
//use Design\Main as Dmain;

//class auto-loading
function loader($className){
    require_once $className.'.php';
}
spl_autoload_register('loader');

$object1=new CMain();
//$object2= new DMain();
