<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance |  Login</title>
    <link rel="shortcut icon" href="./public/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./public/css/login.css?<?php echo time(); ?>">
</head>
<body>

    <div class="container">
        <div class="container__box">
            <div class="login_img">
                <img src="./public/img/login.jpg" alt="login">
            </div>
            <div class="form_container">
                <div class="form__box">
                    <h2>Student Login</h2>
                    
                    <?php if(isset($_SESSION['errMsg'])){ ?>
                        <div class="errMsg"><?php echo $_SESSION['errMsg'] ?></div>
                    <?php unset($_SESSION['errMsg']); } ?>

                    <?php if(isset($_SESSION['sucMsg'])){ ?>
                        <div class="sucMsg"><?php echo $_SESSION['sucMsg'] ?></div>
                    <?php unset($_SESSION['sucMsg']); } ?>

                    <form action="./controllers/loginController.php" method="POST">
                        <div class="form__div">
                            <label for="email">Email <span>*</span></label>
                            <input type="email" name="email" id="email" placeholder="example@support.com">
                        </div>
                        <div class="form__div">
                            <label for="password">Password <span>*</span></label>
                            <input type="password" name="password" id="password" placeholder="*****">
                        </div>
                        <button type="submit" name="login" class="login_btn">Login</button>
                    </form>
                    <div class="login_link">
                        you don't have an account! <a href="./screens/registerScreen.php">register here.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>