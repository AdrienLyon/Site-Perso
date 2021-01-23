<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href='https://fonts.googleapis.com/css?family=Slabo13px' rel='stylesheet'/>
        <script src="https://kit.fontawesome.com/76eb1105ab.js" crossorigin="anonymous"></script> 
        <script  src="public/js/jquery-3.4.1.min.js"></script>     
        <link rel="stylesheet" href="dist/css/bootstrap.min"/>         
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link href="public/css/style.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/jpg" href="public/images/logo.png"/>
    </head>
    <body>
        <header >
           
                <div id="topBar" >
                    <div class="topInfo container">
                        <ul class="col-md-6">
                        <li ><i class="fas fa-user"> </i> Adrien Bitton</li>
                        <li ><i class="far fa-envelope"></i> adrienbitton@outlook.fr</li>
                        <li ><i class="fas fa-phone"></i> 06 78 41 34 70</li>
                        </ul>
                        <span class="col-md-2 socialIcons"><a href="" title="mon profil Github"><i class="fab fa-linkedin"></i></a><a href="" title="mon profil Linkedin"><i class="fab fa-github-square"></i></a> <a href=""title="ma page facebook"><i class="fab fa-facebook-square"></i></a></span>
                        <span class="col-md-4"><p>Développeur web Freelance à Lyon</p></span>
                    </div>
                </div>    
                    <div class="topBannerNav container">
                        <div class="logoCase col-md-4">
                            <img src="public/images/logo1.jpg" alt="logo-Adrien-Bitton">
                        </div>
                        <nav class="mainNav offset-md-1 col-md-7 ">
                            <ol>
                                <li><a class="firstButton" href="#">Accueil</a></li>
                                <li><a class="otherButton" href="#service">Services</a></li>
                                <li><a class="otherButton" href="#projects">Réalisations</a></li>
                                <li><a class="otherButton" href="#skills">Compétences</a></li>
                                <li><a class="otherButton" href="#contact">Contact</a></li>
                            </ol>
                            
                        </nav>
                    </div>
                             
                
           
            
            
                        
        </header>
        
            
        
        
        <div class="mainContentFirst">
            <?= $content?>
        </div>
           
        <footer>
            <div class="infoFooter container">
                <div class="logoCaseFooter col-md-3">
                    <img src="public/images/logo2.jpg" alt="logo-Adrien-Bitton">
                </div>
                <div class="infoDevFooter col-md-3">
                    <h3>Développeur Web Freelance</h3>
                    <p>Création, intégration et modifications de sites vitrine sur mesure, sur lyon (Rhone 69) et en remote partout en France.</p>
                </div>
                <div class="infoContactFooter col-md-3">
                    <h3>Coordonnées</h3>
                    <p>Création, intégration et modifications de sites vitrine sur mesure, sur lyon (Rhone 69) et en remote partout en France.</p>
                </div>
                <div class="navFooter col-md-3">
                    <nav class="footerNav ">
                        <h3>Navigation</h3>
                            <ol>
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#service">Services</a></li>
                                <li><a href="#projects">Réalisations</a></li>
                                <li><a href="#skills">Compétences</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ol>
                            
                        </nav>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright © 2021 - www.adrienbittonweblyon.fr - Développeur web Freelance</p>
            </div>
        </footer>

            <script src="public/js/slider.js"></script>
    </body>
</html>
