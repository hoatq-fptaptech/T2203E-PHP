<?php
$id = $_GET["id"];
// tim book co id tu db
// neu ko co thi di sang 404
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2203e";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo $conn->error;
    die();
}
$sql = "select * from books where id=$id";

$rs = $conn->query($sql);
$book = [];
if($rs->num_rows > 0){
    while($row = $rs->fetch_assoc()){
        $book = $row;
    }
}else{
    die("404");
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php");?>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="updatebook.php?id=<?php echo $book["id"];?>" method="post">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input class="form-control" value="<?php echo $book["name"] ;?>" type="text" name="name" placeholder="enter name..." required />
                </div>
                <div class="form-group mb-3">
                    <label>Author</label>
                    <input class="form-control" value="<?php echo $book["author"] ;?>" type="text" name="author" placeholder="Author..." required />
                </div>
                <div class="form-group mb-3">
                    <label>Qty</label>
                    <input class="form-control" value="<?php echo $book["qty"] ;?>" min="0" type="number" name="qty" placeholder="Qty..." required />
                </div>
                <button type="submit" class="btn btn-outline-danger">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>



