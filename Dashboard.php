<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CodeHive</title>
        <link rel="icon" href="icons/codeHive.svg">
        <link rel="stylesheet" href="css/student-project.css">
    </head>

    <body>
        <div class="container">
            <?php include_once('includes/sidebar.php'); ?>
            <?php include_once('includes/header.php'); ?>
            <div class="main">
                <div class="search-form">
                    <h4>Search projects</h4>
                    <div class="search-filter">
                        <div class="search-bar">
                            <form action="" method="POST">
                                <input type="search" placeholder="Search for projects here" name="search-projects" id="search-projects" required>
                                <button type="submit">
                                    <div class="search-button">
                                        <img src="icons/search.svg" alt="" id="form-icon">
                                    </div>
                                </button>
                            </form>
                        </div>
                        <button class="filter" id="filter">
                            <h3>Filter</h3>
                            <img src="icons/filter.svg" alt="">
                        </button>
                    </div>
                    <div class="filter-search" id="filter-search">
                        <form action="" method="POST" id="filter-form" class="filter-search">
                            <input type="radio" name="project-ugpg" id="ug" value="UG">
                            <label for="ug">UG</label>

                            <input type="radio" name="project-ugpg" id="pg" value="PG">
                            <label for="pg">PG</label>

                            <input type="radio" name="project-type" id="mini-project" value="Mini Project">
                            <label for="mini-project">Mini Project</label>

                            <input type="radio" name="project-type" id="main-project" value="Main Project">
                            <label for="main-project">Main Project</label>

                            <button type="submit">Apply</button>
                        </form>
                    </div>
                </div>
                <div class="search-result">
                    <h2>Search Results</h2>
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
                                <a href="#"><img src="icons/code-solid.svg" alt="">file source</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="js/user-page.js"></script>
        <script src="js/student-project.js"></script>
    </body>

    </html>

<?php } ?>