<?php
// constraints
define("DB_HOST","localhost");
define("DB_USER","api_labwork");
define("DB_PASS","om.gm.adonai.gi!");
define("DB_NAME","test");
define("DB_PORT","3306");

/*$servername = "localhost";
$username = "api_labwork";
$password = "om.gm.adonai.gi!";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/

class Database{
    //class property
    public $connection;

    //constructor
    public function __construct(){
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);

        //IF THINGS GO WRONG
        if($this ->connection->connect_error){
            echo"Something is wrong"
            .$this->connection->connect_errno;
            die();//stops execution or you can use exit();
        }
    }
    

}
$test =new Database();//an example of an object