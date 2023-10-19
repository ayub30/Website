<?php 
session_start();

	include("connection.php");
	include("functions.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="portfolio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>My Portolio</title>
</head>

<body style="background-color: darkslategray;">
    <div class="container">
        <div id="headernavigation_bar">
            <header style="font-size: 40px;">Mr Ayub Macalim | Student at Queen Mary University London<header>
                    <hr>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="index.php">About Me</a></li>
                        <li><a href="https://outlook.office.com/mail/">Contact Me</a></li>
                        <li><a href="viewBlog.php">View Blog</a></li>
                        <li><a href="CV.html">CV</a></li>

                    </ul>
                    <hr>

        </div>
        <div class="Skills_Box">
            <h2>My Skills</h2>
            <section>
                <img src="java.png" width="50px" height="50px" class="skills-pics">
                <img src="css.png" width="50px" height="50px" class="skills-pics">
                <img src="html.png" width="50px" height="50px" class="skills-pics">
                <figcaption>
                    during my first year as a computer science student i have become proficient in these three coding
                    languages and am quite confident in using them


                </figcaption>
            </section>
        </div>
        <div id="about_me_box">
            <h2 class="about-me">About Me</h2>
            <figure>
                <img src="photo.png" width="250px" height="250px" id="pic">
                <figcaption>
                    My name is Ayub Abdirahman Macalim and im currently a first year Computer Science student at Queen
                    Mary University of London and a aspiring Software Engineer,My interest for computers has started
                    from a young age when i was especially intruiged in how i was having the time of my life smashing
                    buttons staring at a screen,
                    as i have grown and have been amalgamating my passions. I am specifically intrigued by the
                    discipline of cyber security, as it requires a robust and logical thought process
                    Outside of my academics, I enjoy playing football and play in a semi-pro football team. Being part
                    of this team has helped to develop my leadership and communication skills which would be fundamental
                    when working in a group.
                </figcaption>
            </figure>
        </div>

    </div>
    <div id="footer">
        <hr>
        <footer>
            <p><i>Copyright © 2023 Mr Ayub A Macalim</i></p>
        </footer>
    </div>
</body>

</html>