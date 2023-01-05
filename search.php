<?php $title="Search"; ?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php");?>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <form action="postSearch.php" method="post">
                        <div class="form-group mb-3">
                            <label>Search...</label>
                            <input class="form-control" type="text" name="q" placeholder="Enter ..." required />
                        </div>
                        <button type="submit" class="btn btn-outline-danger">Search</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</body>
</html>
