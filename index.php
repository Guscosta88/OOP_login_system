<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>

<section class="index-login">
    <div class="wrapper">
        <div class="index-login-signup">
        <?php
            if(isset($_SESSION["userid"]))
            {
                ?>
                <li><a href="#"><?php echo $_SESSION["useruid"]; ?> </a></li>
                <li><a href="includes/logout.inc.php">LOGOUT</a></li>
                <?php
            }
            else
            {
                ?>
            <h4>SIGN UP</h4>
            <p> Sign-up here!</p>
            <form action="includes/signup.inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-mail">
                <br>
                <button type="submit" name="submit"> SIGN UP </button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <p> Login here!</p>
            <form action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit"> LOGIN </button>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</section>

    
</body>
</html>