<?php

$_POST = array();
session_start();

// // If the user is not logged in, redirect to the login page
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
//     exit;
// }

// message in the session
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

// Clear the message from the session to prevent it from displaying multiple times
unset($_SESSION['username']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHive</title>
    <link rel="icon" href="../icons/codeHive.svg">
    <link rel="stylesheet" href="../css/student-project.css">
</head>

<body>
    <div class="container">
        <div class="side-nav" id="side-nav">
            <div class="section-1">
                <div id="username"><?php echo $username ?></div>
                <div class="cross" id="cross">
                    <img src="../icons/cross.svg" alt="">
                </div>
            </div>
            <div class="h-divider"></div>

            <div class="link projects">
                <img src="../icons/resource.svg" alt="">
                <a href="../pages/student-project.html" id="projects">Projects</a>
            </div>
            <div class="link">
                <img src="../icons/idea.svg" alt="">
                <a href="../pages/student-idea-submission.html" id="idea-submission">Idea Submission</a>
            </div>
            <div class="link">
                <img src="../icons/upload.svg" alt="">
                <a href="../pages/student-uploads.html" id="your-projects">Your Uploads</a>
            </div>
            <div class="link">
                <img src="../icons/bell.svg" alt="">
                <a href="../pages/student-notification.html" id="notification">Notifications</a>
            </div>
            <div class="h-divider"></div>
            <div class="link">
                <img src="../icons/setting.svg" alt="">
                <a href="../pages/settings.html" id="setting">Settings</a>
            </div>

            <!-- logout -->

            <div class="link">
                <img src="../icons/logout.svg" alt="">
                <a href="#" onclick="openModal()" id="logout">Logout</a>
            </div>

            <!-- The modal -->
            <div class="overlay" id="overlay" onclick="closeModal()"></div>
            <div class="modal" id="modal">
                <span class="close-btn" onclick="closeModal()">&times;</span>
                <p>Are you sure you want to logout?</p>
                <button class="yes-btn" onclick="confirmLogout()">Yes, Logout</button>
                <button class="cancel-btn" onclick="closeModal()">Cancel</button>
            </div>


        </div>
        <div class="menu-button" id="menu-button">
            <img src="../icons/menu.svg" alt="">
        </div>
        <header>
            <div class="user">
                <img src="../icons/account.svg" alt="">
                <h2>Student</h2>
            </div>
            <div class="right-side-links">
                <div class="notifi-icon">
                    <a href="#">
                        <img src="../icons/bell.svg" alt="">
                    </a>
                    <span class="notification-count">4</span>
                </div>
            </div>
        </header>
        <div class="main">
            <div class="search-form">
                <h4>Search projects</h4>
                <div class="search-filter">
                    <div class="search-bar">
                        <form action="" method="POST">
                            <input type="search" placeholder="Search for projects here" name="search-projects" id="search-projects" required>
                            <button type="submit">
                                <div class="search-button">
                                    <img src="../icons/search.svg" alt="" id="form-icon">
                                </div>
                            </button>
                        </form>
                    </div>
                    <button class="filter" id="filter">
                        <h3>Filter</h3>
                        <img src="../icons/filter.svg" alt="">
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

                        </div>
                    </div>
                </div>
            </div>
            <div class="new-uploads">
                <h2>New Uploads</h2>
                <div class="project-container">
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

                        </div>
                    </div>
                    <div class="project-box">
                        <div class="file-content">

                        </div>
                    </div>
                    <div class="project-box">
                        <div class="file-content">

                        </div>
                    </div>
                    <div class="project-box">
                        <div class="file-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/user-page.js"></script>
    <script src="../js/student-project.js"></script>
</body>

</html>