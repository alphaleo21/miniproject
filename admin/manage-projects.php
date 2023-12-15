<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:logout.php');
} else {
    // for deleting user
    if (isset($_GET['id'])) {
        $adminid = $_GET['id'];
        $msg = mysqli_query($con, "delete from events where id='$adminid'");
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
        <link rel="stylesheet" href="../css/manage-projects.css">
    </head>

    <body>
        <div class="container">
            <?php include_once('includes/sidebar.php'); ?>
            <?php include_once('includes/header.php'); ?>
            <div class="main">
                <h2>Welcome, Admin!</h2>
                <h3>Manage Projects</h3>

                <div class="search-filters">
                    <form action="search_projects.php" method="GET">
                        <input type="text" name="search" placeholder="Search by project title, student, or other criteria">
                        <button type="submit">Search</button>
                    </form>

                    <select name="filter">
                        <option value="all">All Projects</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                    <button type="submit" form="filter-form">Filter</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>Title</th>
                            <th>Student</th>
                            <th>Status</th>
                            <th>Progress</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $search = $_POST['search'];
                        // Build and execute a SQL query
                        $sql = "SELECT * FROM Projects";
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['project_id'] . '</td>';
                            echo '<td>' . $row[''] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['role'] . '</td>';
                            echo '<td>' . $row['batch'] . '</td>';
                            echo "<td>";
                            echo "<a href='edit-user.php?uid={$row['user_id']}'>Edit</a>";
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