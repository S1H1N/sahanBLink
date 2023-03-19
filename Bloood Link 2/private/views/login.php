<?php
$is_invalid = false;

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/css/login.css">
</head>

<body>
   

    <div class="main">

        <div class="logo"><img class="logo-1" src="images/Logo.png" alt=""></div>

        <div class="rectangle">
            <div class="Dont-have-an-account">Don't have an account ? <a href="<?=ROOT?>/signup" class="">Sign Up!</a> </div>
            <div class="item-2">
                <div class="welcome-back">Welcome Back</div>
                <div class="login-to-your-account">Login into your account</div>
            </div>
            <div class="login-form">
            <?php
    if($is_invalid):?>
    <em>Invalid Login</em>    
    <?php endif ?>
                <form class="login" action="" method="post">
                    <div><input class="input" name="email" type="text" placeholder="Username / Email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"></div>
                    <div><input class="input in1" name="password" type="password" placeholder="Password" id="password" ></div>
                    <div class="forget-password"><a href="">Reset Password</a> </div>
                    <div><button class="login-button">Log In</button></div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>