<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:logout.php');
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CodeHive</title>
        <link rel="icon" href="..icons/codeHive.svg">
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <div class="container">
            <?php include_once('includes/sidebar.php'); ?>
            <?php include_once('includes/header.php'); ?>
            
            <div class="main">
                <h2>Welcome, Admin!</h2>
                <ul class="mentor-list">
                    <!-- Mentor request items go here -->
                    <li class="mentor-request">
                        <h2>Mentor Request 1</h2>
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Experience:</strong> 5 years</p>
                        <p><strong>Skills:</strong> HTML, CSS, JavaScript</p>
                        <button class="approve-button">Approve</button>
                        <button class="reject-button">Reject</button>
                    </li>
                    <!-- Add more mentor request items as needed -->
                </ul>
                <!-- <?php include("admin-requests.php"); ?> -->

            </div>
        </div>
        <script src="../js/user-page.js"></script>
    </body>

    </html>

<?php } ?>