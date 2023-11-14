<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

require_once"../../admin/functions/connect.php";

$insertMessage = "INSERT INTO messages (name , email , phone , message , view ) VALUES ('$name','$email','$phone','$message','0')";

$res = $conn->query($insertMessage);

if($res){
    echo"<div class='alert alert-primary'>Message Sent Successfully</div>";
}else{
    echo $conn->error;
}