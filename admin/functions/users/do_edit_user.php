<?php 
$id = $_POST['id'];
// echo $id ;die;
$name = $_POST['name'];
$email = $_POST['email'];
$priv = $_POST['priv'];

$pass = $_POST['pass'];
require_once"../connect.php";
// print_r($_POST);
// print_r($_FILES);die;


if(!empty($pass)){
  $new_pass = md5($pass);
  require_once"../connect.php";
  $update_pass = "UPDATE users SET password='$new_pass'";
  $res = $conn->query($update_pass);
  if(!$res){
    echo $conn->error;
    die;
  }
}


//file

$img_name = $_FILES['img']['name'];
$img_size = $_FILES['img']['size'];
$img_tmp  = $_FILES['img']['tmp_name'];

//check on img name
$explode = explode(".",$img_name);
$end     = end($explode);
$arr     = ["jpg","jpeg","png","jfif"];

if(!in_array($end,$arr)){
   echo"wrong extention";
   die;
}



//check on img size 
if($img_size >= 3000000){
    echo "wrong size";
    die;
}

$new_img_name = time().rand(1,1000).$img_name;
move_uploaded_file($img_tmp,"../../images/$new_img_name");

$update_user = "UPDATE users SET name='$name' , email='$email' , priv='$priv' , img ='$new_img_name' WHERE id = $id ";
$res2 = $conn->query($update_user);

if($res2){
    echo"<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : User Edit successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}