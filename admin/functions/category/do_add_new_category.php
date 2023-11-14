<?php 


$name = $_POST['name'];

require_once"../connect.php";

$insertCategory = "INSERT INTO category (name) VALUES ('$name')";

$res = $conn->query($insertCategory);

if($res){
    echo "<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : Added New Category successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}
