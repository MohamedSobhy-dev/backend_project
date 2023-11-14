<?php 
$id = $_POST['id'];
// echo $id ;die;
$name = $_POST['name'];

require_once"../connect.php";
$update_brand = "UPDATE brand SET name='$name'  WHERE id = $id ";
$res2 = $conn->query($update_brand);

if($res2){
    echo"<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : Brand Edit successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}