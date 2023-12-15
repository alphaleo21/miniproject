<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:logout.php');
} else {

    //Code for Updation 
    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        $userid = $_GET['uid'];

        // created time
        $updated_at = date("Y-m-d H:i:s");

        $msg = mysqli_query($con, "UPDATE Users SET username='$username',email='$email',role='$role', update_at='$updated_at' where user_id='$userid'");

        if ($msg) {
            echo "<script>alert('Profile updated successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
        }
    }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CodeHive</title>
        <link rel="icon" href="..icons/codeHive.svg">
        <link rel="stylesheet" href="../css/manage-users.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    </head>

    <body>
        <div class="container">
            <?php include_once('includes/sidebar.php'); ?>
            <?php include_once('includes/header.php'); ?>

            <div class="main">

                <?php
                $userid = $_GET['uid'];
                $query = mysqli_query($con, "SELECT * FROM Users WHERE user_id='$userid'");
                while ($result = mysqli_fetch_array($query)) { ?>
                    <h1 class="mt-4"><?php echo $result['username']; ?>'s Profile</h1>
                    <div class="card mb-4">
                        <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>User Name</th>
                                        <td><input class="form-control" id="username" name="username" type="text" value="<?php echo $result['username']; ?>" required /></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><input type="text" id="email" name="email" value="<?php echo $result['email']; ?>" required /></td>
                                    </tr>
                                    <tr>
                                        <th>Role</th>
                                        <td><input class="form-control" id="role" name="role" type="text" value="<?php echo $result['role']; ?>" required /></td>
                                    </tr>
                                    <tr>
                                        <th>Reg. Date</th>
                                        <td colspan="3"><?php echo $result['created_at']; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
        <script src="../js/user-page.js"></script>
    </body>

    </html>

<?php } ?>