<?php
//fixing errors that say "object not found" use require once to load the files
require_once"ClassLoader.php";

class Quote extends Database implements Crud{
    public function __construct(){
        //initializes the database connection
        parent::__construct();//call my parent's constructor
    }

    public function insert(){
        $sql "INSERT INTO quote(quote,author,dob,dod,category)
        VALUES('In God we trust, all the other things bring data','W Edwards Deming', 1901,1993,'data science')";

        //execute the query
        $this->connection->query($sql)
    }
    public function get($id =0){}
    public function delete ($id){}
}
$test = new Quote();
$test->insert();