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

        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        //tmp_name ---	A temporary address where the file is located before processing the upload request
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $tmp = explode('.', $file_name);
        $file_ext = end($tmp);
        $extensions = "zip";

        // Allow certain file formats

        if ($file_ext === $extensios) {
            echo "This extension isn't allowed , please choose a jpg,jpeg or png file.";
            die();
        } 
        else {
            //if error not occurs than this will run so we can make 
            $error = false;
            // if every things is okay than move pic to upload (file going to be sent,destination where file is saved)
            move_uploaded_file($file_tmp,"upload/". $file_name);
        }
    }

    if ($error === false) {
                $query = mysqli_query($con, "INSERT INTO Projects (user_id, project_name, description, status, file, keywords)
                                    VALUES ($user_id, '$project_name', '$description', '$status', '$file_name', '$keywords')");

                if ($query) {
                    echo "<script>alert('Project upload successfully');</script>";
                    echo "<script type='text/javascript'> document.location = 'project-uploads.php'; </script>";
                } else {
                    echo "<script>alert('Error creating Uploads');</script>";
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
                    <input type="file" id="file" name="file" accept=".zip"><br><br>

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