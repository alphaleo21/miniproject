<?php

    $_POST = array();
    session_start();

    // message in the session
    $username_incorrect = isset($_SESSION['username_incorrect']) ? $_SESSION['username_incorrect'] : '';
    $password_incorrect = isset($_SESSION['password_incorrect']) ? $_SESSION['password_incorrect'] : '';
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    // Clear the message from the session to prevent it from displaying multiple times
    unset($_SESSION['password_incorrect']);
    unset($_SESSION['username']);
    unset($_SESSION['username_incorrect']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="../icons/codeHive.svg">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="../index.html">
                <img src="../icons/codeHive.svg" alt="">
                <h2>CodeHive</h2>
            </a>
        </div>
       <div class="form">
        <h2>Welcome <h1 style="color: white;"><?php echo $username ?></h1>  </h2>
                <form action="../php/loginProcess.php" method="POST">
                    <div class="input-container">
                        <input type="text" id="username" name="username" placeholder="" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="input-container">
                        <input type="password" id="password" name="password" placeholder="" required>
                        <label for="password">Password</label>
                    </div>
                    <div><p style="color: red; font-size: 22px;">
                        <?php echo $username_incorrect ?></p>
                        <p style="color: red; font-size: 22px;">
                        <?php echo $password_incorrect ?></p>
                    </div>
                    <input class="submit" type="submit" value="Login">
                </form>
                <h3>New to this <a href="../pages/createAccount.php">Create Account</a></h3>    
        </div>                 
    </div>
</body>
<script src="../js/createAccount.js"></script>
</html>
