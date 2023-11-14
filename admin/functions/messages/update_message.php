<?php 

$id = $_POST['id'];

require_once"../connect.php";

$updateMessage = "UPDATE messages SET view = 1 WHERE id = '$id'";

$res = $conn->query($updateMessage);

if($res){
    $selectMes = "SELECT * FROM messages WHERE view = '0'";
    $res = $conn->query($selectMes);
    echo $res->num_rows;	
}else{
    echo $conn->error;
}