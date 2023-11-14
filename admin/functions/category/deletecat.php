<?php 

$id = $_GET['id'];

require_once"../connect.php";

$deleteCategory = "DELETE FROM category WHERE id = '$id' ";


$res = $conn->query($deleteCategory);

if($res){
    header("location:../../category.php");
}else{
    echo $conn->error;
}