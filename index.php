<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\style.css">
    <link rel="javascript" href="scripts.js">
    <link rel="shortcut icon" type="image/jpg" href="img\favicon-32x32.png"/>
    <title>Destinee Portfolio</title>
</head>

<body>

   

    <div class="nav-container">
        <header>
            <nav>
                <ul>
                    <li> <a href="#home">Home</a> </li>
                    <li> <a href="#projects">Projects</a> </li>
                    <li> <a href="#resume">Resume</a> </li>
                    <li> <a href="#contact">Contact</a> </li>
                </ul>
            </nav>
        </header>


    </div>

    <section class='section1' id="home">

        <h1>DESTINEE ADAMS</h1>
        <h3>Software Developer</h3>
        <img src="img\profilePhoto.png" id="profileImg">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Ullam, ex voluptates nostrum explicabo placeat eum ducimus
            repellendus perferendis harum minima impedit amet? Nostrum, nobis
            blanditiis laborum similique ad autem quia.
        </p>

    </section>

    <section class="section2" id="projects">
        <h2>PROJECTS</h2>


        <div class="project-conainer">

            <div class="projcet">
                <img src="img\moon.jpg" alt="moon">

                <div class="projectInfo">
                    <h3>Lorem</h3>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, fuga?</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquid incidunt saepe totam et
                        iusto itaque non necessitatibus expedita vitae?
                    </p>

                </div>

                <button type="submit" onclick="window.open('https://github.com/DestineeAdams')"> demo </button>

            </div>

            <div class="projcet">
                <img src="img\moon.jpg" alt="moon">

                <div class="projectInfo">
                    <h3>Lorem</h3>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, fuga?</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquid incidunt saepe totam et
                        iusto itaque non necessitatibus expedita vitae?
                    </p>

                </div>

                <button type="submit" onclick="window.open('https://github.com/DestineeAdams')"> demo </button>

            </div>




    </section>

    <section class="section3" id="resume">
        <h2>RESUME</h2>

        <div class="button-container">
            <button type="submit" onclick="window.open('files/resume.pdf')"> resume </button>

            <a href="https://github.com/DestineeAdams"><img src="img\githubIcon.png" alt="github"></a>
            <a href="https://www.linkedin.com/in/destinee-adams-7b4266192/"><img src="img\linkedinIcon.png"
                    alt="linkedin"></a>
        </div>

        <!-- <div class="skillsbox">

            <ul>
                <li>skill #1</li>
                <li>skill #2</li>
                <li>skill #3</li>
                <li>skill #4</li>
                <li>skill #5</li>
            </ul>
        </div> -->

    </section>

    <?php

    echo 'hello, world?';

    ?>
    

    <section class="section4" id="contact">
        <h2>SAY HELLO</h2>

        <div class="container">
            <div class="formintro">

                <p>contact Me</p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="formbody">

                <form action="/email.php" method="POST">


                    <input type="text" id="fname" name="fname" placeholder="John Doe">

                    <br>
                    <br>

                    <input type="text" id="Company" name="Company" placeholder="Company Name (not required)">

                    <br>
                    <br>

                    <input type="text" id="userEmail" name="userEmail" placeholder="your email">

                    <br>
                    <br>

                    <input type="text" id="subject" name="subject" placeholder="Suject">

                    <br>
                    <br>

                    <textarea placeholder="message" name="message"></textarea>

                    <br>
                    <br>

                    <input type="submit" value="Submit">

                </form>

            </div>
        </div>
    </section>

    <footer>
        <p>
            sfk;oefkolz;dkl;sdsl;l;
        </p>
    </footer>

</body>

</html>