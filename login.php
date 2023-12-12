<?php session_start();
include_once('includes/config.php');
// Code for login 
if (isset($_POST['login'])) {
    $password = $_POST['password'];
    $dec_password = md5($password);
    $useremail = $_POST['email'];
    $ret = mysqli_query($con, "SELECT user_id, username FROM Users WHERE email='$useremail' and password='$dec_password'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {

        $_SESSION['id'] = $num['user_id'];
        $_SESSION['name'] = $num['username'];
        header("location:student-project.php");
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>                                     


<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="../icons/codeHive.svg">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container">
        <div class="logo">
            <a href="index.php">
                <img src="icons/codeHive.svg" alt="">
                <h2>CodeHive</h2>
            </a>
        </div>
        <div class="form">
            <h2>Welcome <h1 style="color: white;"><?php echo $username ?></h1>
            </h2>
            <form method="POST">
                <div class="input-container">
                    <input type="email" id="email" name="email" placeholder="" required>
                    <label for="username">Email</label>
                </div>
                <div class="input-container">
                    <input type="password" id="password" name="password" placeholder="" required>
                    <label for="password">Password</label>

                    <div id="show-password" class="show-password-icon">
                        <img class="visible" src="icons/visibility_off.svg" alt="">
                        <img class="non-visible" src="icons/visibility.svg" alt="">
                    </div>
                </div>
                <div>
                    <p style="color: red; font-size: 22px;">
                        <?php echo $username_incorrect ?></p>
                    <p style="color: red; font-size: 22px;">
                        <?php echo $password_incorrect ?></p>
                </div>
                <input class="submit" name="login" type="submit" value="Login">
            </form>
            <h3>New to this <a href="createAccount.php">Create Account</a></h3>
        </div>
    </div>
</body>
<script src="js/createAccount.js"></script>

</html>