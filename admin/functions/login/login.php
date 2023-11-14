<?php 

$name = $_POST['name'];
$pass = md5($_POST['password']);

require_once"../connect.php";

$select ="SELECT * FROM users WHERE name ='$name' AND password ='$pass' ";

$res = $conn->query($select);
$res2 = $res->fetch_assoc();


if($res->num_rows > 0){
    session_start();
    $_SESSION['id'] = $res2['id'];
    header("location:../../index.php");
}else{
    header("location:../../login.php");
}




