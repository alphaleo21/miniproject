<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:logout.php');
} else {
    // for deleting user
    if (isset($_GET['id'])) {
        $user_id = $_GET['id'];
        $msg = mysqli_query($con, "DELETE FROM Users WHERE user_id='$user_id'");
        if ($msg) {
            echo "<script>alert('Data deleted');</script>";
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
    </head>

    <body>
        <div class="container">
            <?php include_once('includes/sidebar.php'); ?>
            <?php include_once('includes/header.php'); ?>

            <div class="main">
                <h1>Manage Users</h1>

                <!-- Search and Filters -->
                <div class="search-filters">

                    <form method="GET">
                        <input type="text" name="search" placeholder="Search by username or email">
                        <button type="submit" name="search-users">Search</button>
                    </form>

                </div>

                <!-- User List (Table) -->
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Batch Year</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $search = $_POST['search'];
                        // Build and execute a SQL query
                        $sql = "SELECT * FROM Users WHERE username LIKE '%$search%' OR email LIKE '%$search%'";
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['user_id'] . '</td>';
                            echo '<td>' . $row['username'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['role'] . '</td>';
                            echo '<td>' . $row['batch'] . '</td>';
                            echo "<td>";
                            echo "<a href='user-profile.php?uid={$row['id']}'>Edit</a>";
                            echo "|";
                            echo "<a href='manage-users.php?id={$row['user_id']}' onClick=\"return confirm('Do you really want to delete');\">Delete</a>";
                            echo "</td>";
                            echo '</tr>';
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="../js/user-page.js"></script>
    </body>

    </html>

<?php } ?>