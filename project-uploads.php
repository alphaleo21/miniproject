<?php
session_start();
include_once('includes/config.php');

if (strlen($_SESSION['id']) == 0) {
    header('location:logout.php');
} else {
    // Code for project Creation
    if (isset($_POST['project'])) {
        $user_id = $_SESSION['id'];
        $project_name = $_POST['project_name'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $keywords = $_POST['keywords'];

        $query = mysqli_query($con, "INSERT INTO Projects (user_id, project_name, description, status, keywords)
                                    VALUES ($user_id, '$project_name', '$description', '$status', '$keywords')");

        if ($query) {
            echo "<script>alert('category created successfully');</script>";
            echo "<script type='text/javascript'> document.location = 'Dashboard.php'; </script>";
        } else {
            echo "<script>alert('Error creating category');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHive</title>
    <link rel="icon" href="icons/codeHive.svg">
    <link rel="stylesheet" href="css/student-uploads.css">
</head>

<body>
    <div class="container">
        <?php include_once('includes/sidebar.php'); ?>
        <?php include_once('includes/header.php'); ?>

        <div class="main">
            <div class="add-projects">
                <h1>Project Upload</h1>
                <form method="post" enctype="multipart/form-data">
                    <label for="project_name">Project Name:</label>
                    <input type="text" id="project_name" name="project_name" required><br><br>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required></textarea><br><br>

                    <label for="status">Status:</label>
                    <select id="status" name="status">
                        <option value="Completed">Completed</option>
                        <option value="Room for improvement">Room for improvement</option>
                        <option value="Not-completed">Not-completed</option>
                    </select><br><br>

                    <label for="keywords">Keywords:</label>
                    <input type="text" id="keywords" name="keywords"><br><br>

                    <label for="project_file">Project File (Upload):</label>
                    <input type="file" id="project_file" name="project_file" accept=".zip, .rar"><br><br>

                    <input type="submit" name="project" value="Upload Project">
                </form>
            </div>
            <div class="your-uploads">
                <h2>Your Uploads</h2>
                <div class="project-container">
                    <div class="project-box">
                        <div class="file-content">
                            <h4>project name</h4>
                            <div class="project-description">
                                <p>project description Lorem ipsum project description Lorem ipsum project description Lorem ipsum project description Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum consequuntur fugit hic assumenda! Perferendis recusandae et adipisci quae</p>
                            </div>
                            <div class="author">
                                <h5>Author</h5>

                            </div>
                            <div class="lang-used">
                                <h5>Languages</h5>
                            </div>
                            <a href="#"><img src="../icons/code-solid.svg" alt="">file source</a>
                        </div>
                    </div>
                    <div class="project-box">
                        <div class="file-content">
                            <h4>project name</h4>
                            <p>project description Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum consequuntur fugit hic assumenda! Perferendis recusandae et adipisci quae</p>
                            <div class="author">
                                <h5>Author</h5>

                            </div>
                            <div class="lang-used">
                                <h5>Languages</h5>
                            </div>
                            <a href="#"><img src="../icons/code-solid.svg" alt="">file source</a>
                        </div>
                    </div>
                    <div class="project-box">
                        <div class="file-content">
                            <h4>project name</h4>
                            <p>project description Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum consequuntur fugit hic assumenda! Perferendis recusandae et adipisci quae</p>
                            <div class="author">
                                <h5>Author</h5>

                            </div>
                            <div class="lang-used">
                                <h5>Languages</h5>
                            </div>
                            <a href="#"><img src="../icons/code-solid.svg" alt="">file source</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/user-page.js"></script>
</body>

</html>