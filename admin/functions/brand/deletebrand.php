<?php 

$id = $_GET['id'];

require_once"../connect.php";

$deleteBrand = "DELETE FROM brand WHERE id = '$id' ";


$res = $conn->query($deleteBrand);

if($res){
    header("location:../../brand.php");
}else{
    echo $conn->error;
}