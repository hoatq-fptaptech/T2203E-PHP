<?php
$id = $_GET["id"];
$name = $_POST['name'];
$aut = $_POST["author"];
$qty = $_POST["qty"];

$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2203e";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo $conn->error;
    die();
}
$sql = "update books set name='$name', author='$aut', qty=$qty where id=$id";

$rs = $conn->query($sql);
if($rs){
    header("Location: database.php");
    die();
}
header("Location: edit.php?id=$id");
