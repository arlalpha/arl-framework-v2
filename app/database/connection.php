<?php 

$DATABASE_TYPE = "mysql";
$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "";

switch ($DATABASE_TYPE){

    case "mysql":
        $db_connection  = new mysqli($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

        if(mysqli_connect_errno()){
        
            echo "SERVER ERROR!";
            
        }
        break;



    default:

    break;
}


?>