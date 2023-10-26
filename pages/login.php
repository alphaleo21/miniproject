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
        <h2>Welcome</h2>
                <form action="signIn.php" method="post">
                    <div class="input-container">
                        <input type="text" name="username" placeholder="" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password" placeholder="" required>
                        <label for="password">Password</label>
                    </div>
                    <input class="submit" type="submit" value="Login">
                </form>
                <h3>New to this <a href="../pages/createAccount.php">Create Account</a></h3>    
        </div>                 
    </div>
</body>
<script src="../js/createAccount.js"></script>
</html>