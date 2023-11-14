<?php 


$name = $_POST['name'];
$email = $_POST['email'];
$priv = $_POST['priv'];
$pass = md5($_POST['pass']);


// echo $priv;die;
//    if($priv === "0" ){
//            echo "<div class='alert alert-danger'>Warning,choose one of the privliges</div>";
//            die;
//    }

// check on the upload file name and size 
$imgName = $_FILES['img']['name'];
$imgsize = $_FILES['img']['size'];
$imgTmp  = $_FILES['img']['tmp_name'];

// check img name 
$expoldeIMG = explode(".",$imgName);
$endIMG     = end($expoldeIMG);
$array = ["jpg","png","jpeg","jfif"];

if(!in_array($endIMG , $array)){
     echo "wrong extention";
     die;
}

// check img size
if($imgsize >= 3000000){
    echo " wrong img size ";
    die;
}

$new_img_name = time().rand(1,1000).$imgName;

move_uploaded_file($imgTmp ,"../../images/$new_img_name");

require_once"../connect.php";

$insertUser = "INSERT INTO users (name , email , password , priv , img) VALUES ('$name','$email','$pass','$priv','$new_img_name')";

$res = $conn->query($insertUser);

if($res){
    echo "<div style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>  : Added New User successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i></div>";
}else{
    echo $conn->error;
}
