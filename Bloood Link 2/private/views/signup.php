<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <script src="https://kit.fontawesome.com/1a2c8fa8df.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=ROOT?>/css/signup.css">
</head>

<body>


    <div class="main">

        <div class="logo"><img class="logo-1" src="../../public/images/Logo.png" alt=""></div>

        <div class="rectangle">

            <div class="item-2">
                <div class="Create-your-account">Create Your Account Today </div>
                <div class="getting-started">Getting started is easy</div>
            </div>
            <div class="login-form">
                <form class="login"  method="post" id="signupForm">
                    <div class="f"><label for="name"></label>
                        <input class="input" type="text" placeholder="Full Name" name="name" id="name">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>
                    <div class="f"><label for="email"></label>
                        <input class="input" type="text" placeholder="Enter Email" name="email" id="email">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>
                    <div class="f"> <label for="nic"></label>
                        <input class="input" type="text" placeholder="NIC" name="nic" id="nic">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>
                    <div class="f"> <label for="mobile"></label>
                        <input class="input" type="text" placeholder="Mobile Number" name="mobile" id="mobile">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>
                    <div class="f"><label for="city"></label>
                        <input class="input " type="text" placeholder="City" name="city" id="city">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>
                    <div class="f"><label for="address"></label>
                        <input class="input" type="text" placeholder="Address" name="address" id="address">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>

                    <div class="f"><label for="password"></label>
                        <input class="input" type="password" placeholder="Password" name="password" id="password">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>
                    <div class="f" id="check"><label for="cpassword"></label>
                        <input class="input" type="password" placeholder="Confirm Password" name="cPassword" id="cPassword">
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small>error message</small>
                    </div>


                    <div class="btn-div"><button class="login-button">Create Account</button></div>
                </form>
            </div>
        </div>
    </div>


</body>
<script src="http://localhost:8888/Bloood%20Link%202/public/js/signupval.js"></script>

</html>