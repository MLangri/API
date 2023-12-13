<?php
namespace Design;
//die(__DIR__.);//a (.) in php means append
//die(); //die terminates at that particular point and prints out a message

//require_once '../Classes/Database.php';//the (..) is used to move up one directory
require_once $_SERVER['DOCUMENT_ROOT'].'/api-lab-work-MLangri/3.0_OOP_PHP/Classes/Database.php';
class Main{
    public function __construct(){
        echo "<p>Design/Main</p>";
    }
}