<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $dec_password = md5($password);
  $batch = $_POST['batch'];



  $sql = mysqli_query($con, "SELECT user_id FROM Users where email='$email'");
  $row = mysqli_num_rows($sql);
  if ($row > 0) {
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
  } else {
    $msg = mysqli_query($con, "INSERT INTO Users(username,email,password,batch) VALUES('$username','$email','$dec_password','$batch')");

    if ($msg) {
      echo "<script>alert('Registered successfully');</script>";
      echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
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

  <link rel="stylesheet" href="css/createAccount.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
              <img class="visible" src="icons/visibility_off.svg" alt="">
              <img class="non-visible" src="icons/visibility.svg" alt="">
            </div>

          </div>
          <input type="submit" name="submit" class="submit" />
        </form>
      </div>
      <h3>Already have an account <a href="login.php">LogIn</a></h3>
      <div id="error-messages" style="color: red; font-size: 18px;">
        <?php echo $error_message; ?>
      </div>
    </div>
  </div>
  <script src="js/createAccount.js"></script>
</body>

</html>