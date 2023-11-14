<?php 

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

$insertProduct = "INSERT INTO products (name , price , brand , category , description , cover , user) VALUES 
                                       ('$name','$price','$brand','$category','$description','$new_cover_name','1')";

$res = $conn->query($insertProduct);
if($res){
    echo"<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : Added Product  successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}

