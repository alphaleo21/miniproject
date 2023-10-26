<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeHive</title>
    <link rel="icon" href="icons/codeHive.svg">
    
    
    <link rel="stylesheet" href="css/home.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Roboto+Condensed&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
    <div class="container">
            <header>
                <div class="logo">
                    <div class="name-log">
                       <img src="icons/codeHive.svg" alt="hive">
                    </div>
                    <a href="#home-main">
                        <h1>CodeHive</h1>
                    </a>
                </div>
                <div class="options">
                    <h2><a href="#about-us">About Us</a></h2>
                    <button class="login-button"><a href="pages/login.php">Log In</a></button>
                </div>

                <div class="menu">
                    <button class="menu-icon" id="menu-icon">
                        <img src="icons/menu.svg" alt="menu">
                    </button>
                </div>
        
            </header>
        <div class="main">    
            <section id="home-main">
                <div class="option-menu-list" id="option-menu-list">
                    <a href="#about-us">About Us</a>
                    <a href="pages/login.php">Log In</a>
                </div>
                <div class="description">
                    <h2>CodeHive: Ignite, Innovate, Inspire.</h2>
                    <p>Empower your college journey with CodeHive. 
                        Upload your projects, propose fresh ideas, and contribute to
                         a valuable resource hub for the coding community.</p>
                    <a href="pages/createAccount.php"><button id="button-get-started">Get Started</button></a>
                </div>
            </section>
           <section class="about-us" id="about-us">
                <div class="content-in-about-us">
                    <h2>About Us</h2>
                    <p>Welcome to CodeHive, your go-to platform for connecting students and
                        mentors in project development. We're dedicated to fostering
                        innovation, collaboration, and knowledge-sharing among aspiring
                        students and experienced mentors.
                    </p>
                    <h2>Our Mission</h2>
                    <p>At CodeHive, our mission is to provide a seamless platform where students
                        can submit their project ideas, connect with mentors, and collaborate on
                        exciting projects that drive learning and growth. We believe that every
                        project is an opportunity to learn, and every mentorship is a chance to
                        inspire.
                    </p>
                    <h2>What We Offer</h2>
                    <ul>
                        <li><h3>Project Idea Submission:</h3>
                            Students can submit their creative and innovative project
                            ideas, and watch them come to life with the guidance of
                            skilled mentors.
                        </li>
                        <li><h3>Mentor Support</h3>
                            Experienced mentors offer guidance,insights and feedback to help
                            students navigate the challenges and complexities of their projects.
                        </li>
                        <li><h3>Previous Year Project</h3>
                            Students can check previous projects done by their senior's and can create a new project
                            or extend previous projects.
                        </li>
                    </ul>
                    <h2>Join Us</h2>
                    <p>If you're a student with an innovative project idea, CodeHive
                        is the place for you. Join our community and embark on a journey of growth,
                        learning and collaboration.
                    </p>
                    <p>Thank you for choosing CodeHive as your project management platform.
                        We're excited to see your ideas come to life!
                    </p>
                </div>
           </section>
        </div>
    </div>

    <script src="js/home.js"></script>
</body>
</html>