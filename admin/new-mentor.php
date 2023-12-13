<?php
session_start();
include_once('../includes/config.php');

if (strlen($_SESSION['adminid']) == 0) {
    header('location:logout.php');
} else {
    // Code for User Creation
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $batch = '2000';
        $password = md5($_POST['password']);
        $role = 'mentor';

        $query = mysqli_query($con, "INSERT INTO Users (username, email, password, batch, role)
                                    VALUES ('$username', '$email', '$password', '$batch', '$role')");

        if ($query) {
            echo "<script>alert('User created successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
        } else {
            echo "<script>alert('Error creating user');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <link rel="icon" href="icons/codeHive.svg" />

    <link rel="stylesheet" href="../css/new_mentor.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- icon link -->

</head>

<body>
    <div class="container">
        <?php include_once('includes/sidebar.php'); ?>
        <?php include_once('includes/header.php'); ?>

        <div class="main">
            <div class="form">
                <form id="registerForm" name="signup" method="POST">

                    <div class="input-container">
                        <input type="text" id="username" name="username" placeholder="" required />
                        <label for="username">Username</label>
                    </div>
                    <div class="input-container">
                        <input type="email" id="email" name="email" placeholder="" required />
                        <label for="email">Email</label>
                    </div>
                    <div class="input-container">
                        <input type="text" id="batch" name="batch" placeholder="" required />
                        <label for="batch">Batch</label>
                    </div>
                    <div class="input-container">
                        <input type="password" id="password" name="password" placeholder="" required />
                        <label for="password">Password</label>

                        <div id="show-password" class="show-password-icon">
                            <img class="visible" src="../icons/visibility_off.svg" alt="">
                            <img class="non-visible" src="../icons/visibility.svg" alt="">
                        </div>

                    </div>
                    <input type="submit" name="submit" class="submit" />
                </form>
            </div>
        </div>
    </div>
    <script src="../js/user-page.js"></script>
    <script src="../js/createAccount.js"></script>
</body>

</html>