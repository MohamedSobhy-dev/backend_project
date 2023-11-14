<?php

$id = $_GET['id'];

require_once"../connect.php";

$deleteProduct ="DELETE FROM products WHERE id ='$id'";
$res = $conn->query($deleteProduct);
if($res){
    header("location:../../products.php");
}else{
    echo $conn->error;
} 