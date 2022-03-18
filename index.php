<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Wayan Savary</title>
        <link rel="stylesheet" href="./style.css">
        <script defer src="./script.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    </head>
    <body>
        <header>
                <img onclick="doClickMenu()" id="iconMenu" src="image/Hamburger_icon.svg.png" alt="Menu">
            <div id="Menu">
                <ul id="liste">
                    <li><a onclick="hideMenu()" href="#about">Aboute me</a></li>
                    <li><a onclick="hideMenu()" href="#experience">My experience</a></li>
                    <li><a onclick="hideMenu()" href="#works">My works</a></li>
                    <li><a onclick="hideMenu()" href="#contact">Contact me</a></li>
                </ul>
            </div>
        </header>
        
        <!-- ---------------------------------------------About me------------------------------------------------------------- -->
        <main>
            <div id='about'>
                <div id="intro">
                    <h1>Hey</h1>
                    <h1>I'm <b>Wayan Savary</b></h1>
                    <h1>a student at CESI</h1>
                </div>

                <p id="resume">Hello I'm Wayan Savary a french student at CESI. I'm trying to become a developer. I like video games and manga/manhwa/webtoons.</p>
                <div id="skill">
                    <div id="hard">
                        <h1>Hard Skills</h1>
                            <div id="lets">
                                <?php
                                    include'competence.inc.php';
                                ?>
                            </div>
                    </div>
                    
                    <div id="soft">
                        <h1>Soft skills</h1>   
                        <p>Persistent</p>
                        <p>Attentive</p>
                        <p>Autonomous</p>
                        <p>Serious</p>
                        <p>Diligent</p>
                    </div>
                </div>
                <a href="image/CV_Wayan_Savary.pdf" target="_blank">
                    <div class="button" >
                        <span>My CV</span>
                        <svg>
                            <polyline class="o1" points="0 0, 150 0, 150 55, 0 55, 0 0"></polyline>
                            <polyline class="o2" points="0 0, 150 0, 150 55, 0 55, 0 0"></polyline>
                        </svg>
                    </div>
                </a>   
            </div>
            <!-- ---------------------------------------------Experience------------------------------------------------------------- -->
            <div id='experience'>
                <h1>Formation</h1>
                <div id="Formation">
                    <?php
                        include'formation.inc.php';
                    ?>
                </div>
                <h1>Jobs</h1>  
                <div id='jobs'>
                    <div class="carte">
                        <h2>Monteur-Câbleur</h2>
                        <p><b>MVG</b> microwave vision group | august 2021</p>
                        <ul>
                            <li>Electronic card testing</li>
                            <li>assamblage</li>
                            <li>Painting</li>
                            <li>Inventory</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ---------------------------------------------Works------------------------------------------------------------- -->
            <div id='works'>
                <h1>Schools projects</h1>
                <div id='school'>
                    <div class="project">
                        <?php
                            include'schoolProject.inc.php';
                        ?>
                    </div>
                </div>
                <h1>Personal projects</h1>
                <div id="personal">
                    <!-- <div class="project"> -->
                    <?php
                            include'personalProject.inc.php';
                        ?>
                    <!-- </div> -->
                </div>
            </div>
            <!-- ---------------------------------------------Contact me------------------------------------------------------------- -->
            <div id="contact">
                <h1>You want to contact me ?</h1>
                <div id="info">
                    <?php include'contact.inc.php';?>
                </div>

                <form id="formulaire" action="formulaire.php" method="post">
                    <label for="name">Name</label>
                    <input  class="form" type="text" id="name" name="name" placeholder="Your name..." required>

                    <label for="email">Email</label>
                    <input class="form" type="email" id="email" name="email" placeholder="exemple@gmail.com" required>

                    <label for="subject">Subject</label>
                    <input  class="form" type="text" id="subject" name="subject" placeholder="The subject..." required>

                    <label for="subject">Message</label>
                    <textarea  class="form" id="message" name="message" placeholder="Your message..." required></textarea>

                    <input class ="form" id='boutonFormulaire' type="submit" value="Submit">
                </form>
            </div>
        </main>
    </body>
</html>