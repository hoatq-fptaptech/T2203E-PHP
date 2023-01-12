<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2203e";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo $conn->error;
    die();
}
$sql = "select * from books";

$rs = $conn->query($sql);
$data = [];
if($rs->num_rows > 0){
    while($row = $rs->fetch_assoc()){
        $data[] = $row;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <head>
        <?php include("head.php");?>
    </head>
</head>
<body>
    <div class="container">
        <a href="createbook.php" class="btn btn-primary">Create new book</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $d):?>
                <tr>
                    <td><?php echo $d["id"];?></td>
                    <td><?php echo $d["name"];?></td>
                    <td><?php echo $d["author"];?></td>
                    <td><?php echo $d["qty"];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $d["id"];?>" class="btn btn-outline-primary">Edit</a>
                        <form action="deletebook.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $d["id"] ;?>"/>
                            <button onclick="return confirm('are you sure?');" type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>
