<?php 

define("HOST",'localhost');
define("USER",'root');
define("PASS","");
define("DB_NAME","chesspro");

$conn = new mysqli(HOST,USER,PASS,DB_NAME);

if($conn){

}else{
    echo $conn->error;
}