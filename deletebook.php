<?php
$id = $_POST["id"];
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2203e";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo $conn->error;
    die();
}
$sql = "delete from books where id = $id";

$rs = $conn->query($sql);
if($rs){

}else{

}
header("Location: database.php");

