<?php
    @include('config.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $batch = mysqli_real_escape_string($conn, $_POST['batch']);
        $registerNo = mysqli_real_escape_string($conn, $_POST['registerNo']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    //checking for user's already have an account using email
    $sql = "SELECT * FROM Users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        // Set the error message in a session variable
        session_start();
        $_SESSION['error_message'] = "Email already registered!!";
        header('Location: ../pages/createAccount.php'); // Redirect back to the register page
        exit;

    }else {
      // Insert into the database
      $sql = "INSERT INTO Users (username, fullname, email, password, batch_year, registerno) VALUES 
      ('$username', '$fullname','$email', '$password', $batch, '$registerNo')";

      if(mysqli_query($conn, $sql)) {
        echo "registeration successfull";
      }else{
        echo  "registration failed";
      }
    }
  }
   
    mysqli_close($conn);
?>
