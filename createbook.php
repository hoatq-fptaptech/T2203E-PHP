<!doctype html>
<html lang="en">
<head>
    <?php include("head.php");?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="postbook.php" method="post">
                    <div class="form-group mb-3">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" placeholder="enter name..." required />
                    </div>
                    <div class="form-group mb-3">
                        <label>Author</label>
                        <input class="form-control" type="text" name="author" placeholder="Author..." required />
                    </div>
                    <div class="form-group mb-3">
                        <label>Qty</label>
                        <input class="form-control" min="0" type="number" name="qty" placeholder="Qty..." required />
                    </div>
                    <button type="submit" class="btn btn-outline-danger">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
