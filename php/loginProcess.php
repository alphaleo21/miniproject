<?php

    include('config.php');
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = $_POST['password'];
    
        $sql = "SELECT password FROM Users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) <= 0) {
            session_start();
            $_SESSION['username_incorrect'] = "Username not found!!";
            header('Location: ../pages/login.php'); // Redirect back to the login page
            exit;
        }

        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        if(password_verify($password, $storedPassword)) {
            session_start();
            $_SESSION['username'] = $username;
            header('Location: ../pages/student-project.php');
            exit;
        } else {
            session_start();
            $_SESSION['password_incorrect'] = "Password is incorrect!!";
            header('Location: ../pages/login.php'); // Redirect back to the login page
            exit;
        }
    }

?>