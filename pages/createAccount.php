<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <link rel="icon" href="../icons/codeHive.svg" />

    <link rel="stylesheet" href="../css/createAccount.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <!-- icon link -->
  </head>
  <body>
    <div class="container">
      <div class="logo">
        <a href="../index.html">
          <img src="../icons/codeHive.svg" alt="" />
          <h2>CodeHive</h2>
        </a>
      </div>
      <div class="contents">
        <div class="form">
          <form action="" method="POST" onsubmit="return validateForm()">
            <div>
              <label for="user-type">Account Type:</label><br />
              <input
                type="radio"
                name="user-type"
                id="user"
                value="user"
                checked
              />
              User
              <input type="radio" name="user-type" id="mentor" value="mentor" />
              Mentor
            </div>
            <div class="input-container">
              <input
                type="text"
                id="fullname"
                name="fullname"
                placeholder=""
                required
              />
              <label for="fullname">Fullname</label>
            </div>
            <div class="input-container">
              <input
                type="text"
                id="username"
                name="username"
                placeholder=""
                required
              />
              <label for="username">Username</label>
            </div>
            <div class="input-container">
              <input
                type="email"
                id="email"
                name="email"
                placeholder=""
                required
              />
              <label for="email">Email</label>
            </div>
            <div class="input-container">
              <input type="text" id="batch" name="batch" placeholder="2021-24" required />
              <label for="batch">Batch</label>
            </div>
            <div class="input-container">
              <input type="number" id="registerNo" name="registerNo" placeholder="" required />
              <label for="registerNo">Register No</label>
            </div>
            <div class="input-container">
              <input
                type="password"
                id="password"
                name="password"
                placeholder=""
                required
              />
              <label for="password">Password</label>
            </div>
            <input type="submit" class="submit" />
          </form>
        </div>
        <h3>Already have an account <a href="../pages/login.php">LogIn</a></h3>
        <div id="error-messages" style="color: red; font-size: 12px;">
      
          <?php
            echo "<p>$error_message</p>";
          ?>

        </div>
      </div>
    </div>
    <script src="../js/createAccount.js"></script>
  </body>
</html>


<?php
    include('connection.php');

    $error_message = "";

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
        //email already exists
        $error_message =  "Email is already registered.";
    }else {
      // Insert into the database
      $sql = "INSERT INTO Users (username, fullname, email, password, batch_year, registerno) VALUES 
      ('$username', '$fullname','$email', '$password', $batch, '$registerNo')";

      if(mysqli_query($conn, $sql)) {
        $error_message = "registeration successfull";
      }else{
        $error_message =  "registration failed";
      }
    }
  }
   
    mysqli_close($conn);
?>

