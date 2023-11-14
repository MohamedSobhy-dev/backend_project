<?php 


$name = $_POST['name'];

require_once"../connect.php";

$insertBrand = "INSERT INTO brand (name) VALUES ('$name')";

$res = $conn->query($insertBrand);

if($res){
    echo "<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : Added New Brand successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}
