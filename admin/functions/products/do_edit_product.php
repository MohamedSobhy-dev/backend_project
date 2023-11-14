<?php 
session_start();

$user_id     = $_SESSION['id']; 
$id          = $_POST['id'];
$name        = $_POST['name'];
$price       = $_POST['price'];
$brand       = $_POST['brand'];
$category    = $_POST['category'];
$description = $_POST['description'];

// file
$cover_name = $_FILES['cover']['name'];
$cover_size = $_FILES['cover']['size'];
$cover_tmp  = $_FILES['cover']['tmp_name'];

//check on name 
$explode = explode(".",$cover_name);
$end     = end($explode);
$arr     = ["jpg","png","jpeg","jfif"];

if(!in_array($end,$arr)){
    echo"wrong extention";
    die;
}

// check on size
if($cover_size >= 3000000){
    echo"wrong size";
    die;
}

$new_cover_name = time().rand(1,1000).$cover_name;
move_uploaded_file($cover_tmp,"../../images/$new_cover_name");

require_once"../connect.php";

$updateProduct = "UPDATE products SET name='$name' , price='$price' , brand='$brand' , category='$category' , description='$description' , cover='$new_cover_name' ,user = '$user_id' WHERE id = '$id'";


$res = $conn->query($updateProduct);
if($res){
    echo"<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : Product Edit successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}

