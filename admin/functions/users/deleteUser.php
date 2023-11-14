<?php 

$id = $_GET['id'];

require_once"../connect.php";

$deleteUser = "DELETE FROM users WHERE id = '$id' ";


$res = $conn->query($deleteUser);

if($res){
    header("location:../../users.php");
}else{
    echo $conn->error;
}