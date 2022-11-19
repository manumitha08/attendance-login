<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance |  Register</title>
    <link rel="shortcut icon" href="../public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/register.css?<?php echo time(); ?>">
</head>
<body>

    <div class="container">
        <div class="container__box">
            <div class="register_img">
                <img src="../public/img/register.jpg" alt="register">
            </div>
            <div class="form_container">
                <div class="form__box">
                    <h2>Student Register</h2>

                    <?php if(isset($_SESSION['errMsg'])){ ?>
                        <div class="errMsg"><?php echo $_SESSION['errMsg'] ?></div>
                    <?php unset($_SESSION['errMsg']); } ?>

                    <form action="../controllers/registerController.php" method="POST">
                        <div class="form__div">
                            <label for="name">Name <span>*</span></label>
                            <input type="text" name="name" id="name" placeholder="guna">
                        </div>
                        <div class="form__div">
                            <label for="email">Email <span>*</span></label>
                            <input type="email" name="email" id="email" placeholder="example@support.com">
                        </div>
                        <div class="form__div">
                            <label for="password">Password <span>*</span></label>
                            <input type="password" name="password" id="password" placeholder="*****">
                        </div>
                        <div class="form__div">
                            <label for="cpassword">Confirm Password <span>*</span></label>
                            <input type="password" name="cpassword" id="cpassword" placeholder="*****">
                        </div>
                        <button type="submit" name="register" class="register_btn">Register</button>
                    </form>
                    <div class="register_link">
                        you have an account! <a href="../index.php">login here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>