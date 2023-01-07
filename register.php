<?php
    session_start();
    $title="Search";
    $error = isset($_SESSION["error"])?$_SESSION["error"]:false;
    $fullname = isset($_SESSION["fullname"])?$_SESSION["fullname"]:false;
    $email = isset($_SESSION["email"])?$_SESSION["email"]:false;
    ?>
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
                    <form action="postRegister.php" method="post">
                        <div class="form-group mb-3">
                            <label>Fullname</label>
                            <input class="form-control" value="<?php echo $fullname;?>" type="text" name="fullname" placeholder="Full name..." required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input class="form-control"  value="<?php echo $email;?>"  type="email" name="email" placeholder="Email..." required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input class="form-control" type="password" name="pwd" placeholder="Password..." required />
                        </div>
                        <div class="form-group mb-3">
                            <label>Confirm Password</label>
                            <input class="form-control" type="password" name="cfpwd" placeholder="Retype Password..." required />
                        </div>
                        <?php if($error):?>
                        <p class="text-danger">Vui lòng điền đúng thông tin yêu cầu</p>
                        <?php endif; $_SESSION["error"] = null;?>
                        <button type="submit" class="btn btn-outline-danger">Register</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</body>
</html>
