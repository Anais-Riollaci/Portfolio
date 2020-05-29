<?php
include 'base.php';
?>
    <!-- HEADER -->
        <section class="header">
            <nav class="navbar">
                <ul>
                <li><a class="nav-link" href="#about">About</a></li>
                <li><a class="nav-link" href="#skills">Skills</a></li>
                <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link" href="#message">Contact</a></li>
                </ul>
            </nav>

            <div class="header-title">
            <h1 class="title">
                <span class="portfolio-title">PORTFOLIO</span><br><span class="dev-title">Développeuse WeB</span>
            </h1>
            </div>
        </section>

        <div style="background:black; height: 16px"></div>

    <!-- ABOUT -->
        <section class="about" id="about">
          
                <h3 class="welcome" style="text-align:center"> Bienvenue sur mon portfolio!</h3>
                <!-- CARD -->
                <div class="row">
                    <div class="card">
                        <div class="img-profil">
                            <img src="img/profil/img-profil.jpg" class="profil" alt="">
                        </div>

                        <div class="infos">
                            <div class="presentation">
                                <h3 class="name">Anaïs Riollaci</h3>
                                <p style="color:grey; "><i class="fas fa-map-marker-alt" style="color:red"></i> Paris </p>
                            </div>

                            <div class="contact">
                                <a href="tel:+33769739798" class="tel">07.69.73.97.98</a> 
                                <br>
                                <a href="mailto:anais.riollaci91@gmail.com" class="mail">anais.riollaci91@gmail.com</a> 
                            </div> 
                        </div>
                    </div>
                <!-- ABOUT CONTENT -->
                    <div class="text" >
                      
                        <p>
                        Je m'appelle Anaïs, j'ai 29ans et je suis developpeuse web junior à Paris.<br>
                        Anciennement dans le secteur de la vente, j'ai voulu me reconvertir dans un métier qui me permettrait avant tout d'être en constante évolution dans ma vie professionnelle. 
                        </p>
                        <p>
                        Curieuse et créative c'est tout naturellement que je me suis prise d'engouement pour le developpement front-end... Je porte cependant un tout aussi grand intérêt à développer en back-end.
                        </p>
                    </div>
                </div>
                <h1><marquee class="about-banner" style="text-align:center">< TECHNOLOGIE & CRÉATIVITÉ ></marquee></h1>
                
                    <div class="formation">
                        <h3><i class="fas fa-graduation-cap"></i> FORMATIONS</h3>
                        <p><a class="link-school" href="https://www.codecademy.com/" target="_blank">Codecademy</a><br>
                        Initiation au HTML/CSS en autodidacte</p>
                   
                        <p><a class="link-school" href="https://www.wf3.fr/" target="_blank">WebForce3</a><br>
                        Formation Développer Web/ Web Mobile (490h) de Janvier à Avril 2020 </p>
                    </div>
                
                    <!-- SOFTSKILL -->
                <div class=" about-me">
                    <div class="softskills">
                        <h4>Ce que je suis:</h4>
                        <div class="softskills-content"> 
                            <div class="words-softskill">
                                <p class="softskill">AUDACIEUSE </p>
                                <p class="softskill">AUTONOME </p>
                                <p class="softskill">CRÉATIVE </p>
                                <p class="softskill">CURIEUSE </p>
                                <p class="softskill">PERSÉVÉRANTE </p>
                            </div>
                            <div class="icon-check">
                                <i class="fas fa-check" ></i>
                                <br>
                                <i class="fas fa-check" ></i>
                                <br>
                                <i class="fas fa-check" ></i>
                                <br>
                                <i class="fas fa-check" ></i>
                                <br>
                                <i class="fas fa-check" ></i>
                            </div>
                        </div>
                    </div>
                    <div class="hobbie">
                    <h4>Ce que j'aime:
                        <div class="block-img">
                            <div class="block1">
                                <img src="img/hobbies/img-1.jpg" class="img-hobbie" alt="">
                                <img src="img/hobbies/img-2.jpg" class="img-hobbie" alt="">
                            </div>
                            <div class="block2">
                                <img src="img/hobbies/img-3.jpg" class="img-hobbie" alt="">
                                <img src="img/hobbies/img-4.jpg" class="img-hobbie" alt="">
                            </div>
                        </div>
                    </div>
                </div> 
        </section>
        
    <!-- SKILLS -->
        <section class="skills" id="skills"> 
            <h2><img src="img/background/skill.png" class="skill-title" alt=""></h2>

            <div class="skill-content">
            <!-- LANGUAGE WEB -->
                <div class="skill-language">
                    <div class="languages">
                        <h3><i class="fas fa-laptop-code"></i> LANGUAGES WEB</h3>
                            <h4 class="skill-name">HTML5/ CSS3</h4>
                            <div class="skill-bar">
                                <div class="skill-active html" style="width: 70%" data-perc="100" value="70"><span class="percent">70%</span></div>
                            </div>
                            <br> 
                            <h4 class="skill-name">Java Script</h4>
                            <div class="skill-bar">
                                <div class="skill-active js" style="width: 10%" data-perc="100" value="10"><span class="percent">10%</span></div>
                            </div>
                            <br>
                            <h4 class="skill-name">PHP</h4>
                            <div class="skill-bar">
                                <div class="skill-active php" style="width: 40%" data-perc="100" value="40"><span class="percent">40%</span></div>
                            </div>
                            <br>
                            <h4 class="skill-name">SQL</h4>
                            <div class="skill-bar">
                                <div class="skill-active sql" style="width: 40%" data-perc="100" value="40"><span class="percent">40%</span></div>
                            </div>  
                    </div>
                <!--FRAMEWORK  -->
                    <div class="framework">  
                        <h3>FRAMEWORKS, CMS et Librairies</h3> 
                            
                            <h4 class="skill-name">Bootstrap</h4>
                            <div class="skill-bar">
                                <div class="skill-active bootstrap" style="width: 60%" data-perc="100" value="60"><span class="percent">60%</span></div>
                            </div>
                            <br>
                            <h4 class="skill-name">Jquery</h4>
                            <div class="skill-bar">
                                <div class="skill-active jquery" style="width: 10%" data-perc="100" value="10"><span class="percent">10%</span></div>
                            </div>
                            <br>
                            <h4 class="skill-name">Symfony4</h4>
                            <div class="skill-bar">
                                <div class="skill-active symfony" style="width: 50%" data-perc="100" value="50"><span class="percent">50%</span></div>
                            </div>  
                            <br>
                            <h4 class="skill-name">Wordpress</h4>
                            <div class="skill-bar">
                                <div class="skill-active wordpress" style="width: 30%" data-perc="100" value="40"><span class="percent">30%</span></div>
                            </div>  
                        </div>
             
                </div>
            <!-- ICON SKILLS -->
                <div class="icon-skill">
                    <div class="iconbox windows">
                        <img src="img/logo/logo-windows.png" class="logo-windows" alt="logo-windows">
                        <p>Maitrise de l'environnement Windows</p>
                    </div>
                    <div class="iconbox editor">
                        <img src="img/logo/logo-phpstorm.png" class="logo-phpstorm" alt="logo-phpstorm">
                        <img src="img/logo/logo-vs.png" class="logo-vscode" alt="logo-vscode">
                        <p>Maitrise des éditeurs de code PhpStorm & Visual Studio Code</p>
                    </div>
                    <div class="iconbox git">
                        <img src="img/logo/logo-github.png" class="logo-github" alt="logo-github"/>
                        <p>Versionning et partage de projet avec Git et GitHub</p>
                    </div>
                    <div class="iconbox responsive">
                        <img src="img/logo/logo-responsive.png" class="logo-responsive" alt="logo-responsive">
                        <p>Création de Media Queries afin de gérer la responsivité des sites Web</p>
                    </div>
                </div>
            <!-- CV --> 
                <div class="cv">
                    <a href="files/CV 2020.pdf" class="cv-pdf" target="_blank">Téléchargez mon CV</a>
                </div>
            </div>
        </section>

      
    <!-- PORTFOLIO -->
        <section class="portfolio" id="portfolio">
     
            <h2><img src="img/background/portfolio.png" class="portfolio-title" alt=""></h2>
            <div class="projects">
                <div class="project animalls">
                    <div class="project-description">
                        <h3>Anima'lls</h3>
                        <p>Réalisation de projet de fin de formation</p>
                        <p class="languages-project"> <span class="language-project">Symfony4</span><span class="language-project">HTML5/CSS3</span><span class="language-project"> Bootstrap</span><span class="language-project">PHP</span></p>
                        <a href="http://animalls.irohconsulting.com" class="view" target="_blank">Voir le site</a>
                    </div>
                </div>
            </div>
        </section>

        <div style="background:black; height: 16px"></div>
    <!-- CONTACT -->
        <section class="footer" id="footer">
            <div class="footer-content">
                <div class="message">
                    <h2 style="text-align:center">CONTACT</h2>
                        <?php include 'message.php';?>
                </div>
                <div class="link-reseau"> 
                    <a href="https://www.linkedin.com/in/anais-riollaci-355979196/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/Anais-Riollaci" target="_blank"><i class="fab fa-github-square"></i></a>
                </div>
            </div>

            <p class="signature">&copy; Anaïs Riollaci - Portfolio - 2020</p>
        </section>

