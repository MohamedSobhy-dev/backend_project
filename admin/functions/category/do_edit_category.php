<?php 
$id = $_POST['id'];
// echo $id ;die;
$name = $_POST['name'];

require_once"../connect.php";
$update_category = "UPDATE category SET name='$name'  WHERE id = $id ";
$res2 = $conn->query($update_category);

if($res2){
    echo"<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : Category Edit successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}