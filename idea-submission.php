<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHive</title>
    <link rel="icon" href="icons/codeHive.svg">
    <link rel="stylesheet" href="css/student-idea-submission.css">
</head>

<body>
    <div class="container">
        <?php include_once('includes/sidebar.php'); ?>
        <?php include_once('includes/header.php'); ?>
        <div class="main">
            <h2>Idea Submission Form</h2>
            <div class="form-submission">
                <form action="process-idea-submission.php" method="post" enctype="multipart/form-data">

                    <label for="ideaTitle">Idea Title:</label>
                    <input type="text" id="ideaTitle" name="ideaTitle" required><br><br>

                    <label for="ideaDescription">Idea Description:</label>
                    <textarea id="ideaDescription" name="ideaDescription" rows="4" required></textarea><br><br>

                    <label for="problemStatement">Problem Statement:</label>
                    <textarea id="problemStatement" name="problemStatement" rows="4" required></textarea><br><br>

                    <label for="solution">Solution:</label>
                    <textarea id="solution" name="solution" rows="4" required></textarea><br><br>

                    <label for="scope">Scope:</label>
                    <textarea id="scope" name="scope" rows="4" required></textarea><br><br>

                    <label for="targetAudience">Target Audience:</label>
                    <input type="text" id="targetAudience" name="targetAudience" required><br><br>

                    <label for="benefits">Benefits:</label>
                    <textarea id="benefits" name="benefits" rows="4" required></textarea><br><br>

                    <label for="challenges">Challenges:</label>
                    <textarea id="challenges" name="challenges" rows="4" required></textarea><br><br>

                    <label for="resourcesRequired">Resources Required:</label>
                    <input type="text" id="resourcesRequired" name="resourcesRequired" required><br><br>

                    <label for="teamMembers">Team Members:</label>
                    <input type="text" id="teamMembers" name="teamMembers"><br><br>

                    <label for="attachments">Attachments:</label>
                    <input type="file" id="attachments" name="attachments"><br><br>

                    <label for="mentor">Select Mentor:</label>
                    <select id="mentor" name="mentor" required>
                        <option value="mentor1">Mentor 1</option>
                        <option value="mentor2">Mentor 2</option>
                        <option value="mentor3">Mentor 3</option>
                        <!-- Add more mentor options as needed -->
                    </select>

                    <label for="contactName">Username:</label>
                    <input type="text" id="username" name="username" required><br><br>

                    <label for="contactEmail">Your Email:</label>
                    <input type="email" id="contactEmail" name="contactEmail" required><br><br>

                    <input type="submit" value="Submit Idea">
                </form>
            </div>
        </div>
    </div>
    <script src="js/user-page.js"></script>
</body>

</html>