<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <script src="https://kit.fontawesome.com/76eb1105ab.js" crossorigin="anonymous"></script> 
        <script  src="public/js/jquery-3.4.1.min.js"></script>     
        <link rel="stylesheet" href="dist/css/bootstrap.min"/>         
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link href="public/css/style.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/jpg" href="public/images/logo.png"/>
         <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

    </head>
    <body onload="init()">
        <header >
                <div id="topBar" class="backgroundColorThree color1" >
                    <div class="topInfo container">
                        <ul class="col-md-6">
                            <li ><i class="fas fa-user"> </i> Adrien Bitton</li>
                            <li ><a class="color1" href="mailto:adrienbitton@outlook.fr" title="contat par mail"><i class="far fa-envelope"></i> adrienbitton@outlook.fr</a></li>
                            <li ><i class="fas fa-phone"></i> 06 78 41 34 70</li>
                        </ul>
                        <div class="col-md-2 socialIcons">
                            <a class="color1" href="https://www.github.com/AdrienLyon" target="_blank" title="mon profil Github"><i class="fab fa-github-square"></i></a>
                            <a class="color1"href="https://www.linkedin.com/in/adrien-bitton-13bb1a201/" target="_blank" title="mon profil Linkedin"><i class="fab fa-linkedin"></i></a>
                            <a class="color1"href="https://www.facebook.com/adrien.weblyon" target="_blank" title="ma page facebook"><i class="fab fa-facebook-square"></i></a>
                        </div>
                        <span class="col-md-4"><p>Développeur web Freelance à Lyon</p></span>
                    </div>
                </div>    
                    <div class="topBannerNav">
                        <div class="topBannerBlock container" >
                        <div class="logoCase col-md-4">
                            <a class="scrollLogo" href="#" title="revenir à l'accueil"><img src="public/images/logo1.jpg" alt="logo-Adrien-Bitton"></a>
                        </div>
                        <nav class="mainNav offset-md-1 col-md-7 ">
                            <ol>
                                <li><a class="firstButton scrollMain scrollClickMain" href="#" title="retour à l'acceuil">Accueil</a></li>
                                <li><a class="otherButton scrollServices scrollClickServices" href="#service" title="découvrer mes services">Services</a></li>
                                <li><a class="otherButton scrollProjects scrollClickProjects" href="#projects" title="mes rélisations / projets">Réalisations</a></li>
                                <li><a class="otherButton scrollSkills scrollClickSkills" href="#skills" title="mes compétences web">Compétences</a></li>
                                <li><a class="otherButton scrollContact scrollClickContact" href="#contact" title="contacter moi">Contact</a></li>
                            </ol>                           
                        </nav>
                        </div>
                    </div>
                             
                
           
            
            
                        
        </header>
        
            
        
        
        <div class="mainContentFirst">
            <?= $content?>
        </div>
           
        <footer>
            <div id="topBtn" title="revenir en haut de la page"><i class="far fa-caret-square-up"></i></div>
            <div class="infoFooter container">
                <div class="logoCaseFooter col-md-3">
                    <img src="public/images/logo2.jpg" alt="logo-Adrien-Bitton"></br>
                     <div id="mapid"></div>
                </div>
                <div class="infoDevFooter col-md-3">
                    <h3>Développeur Web Freelance</h3>
                    <p>Création, intégration et modifications de sites vitrines sur mesure, sur Lyon (Rhone 69) et en remote partout en France.</p>
                </div>
                <div class="infoContactFooter col-md-3">
                    <h3>Coordonnées</h3>
                    <div class="socialIconsFooter">
                        <ul>
                            <li><i class="fas fa-phone"></i> 06 78 41 34 70</li>
                            <li><a href="mailto:adrienbitton@outlook.fr" title="contat par mail"><i class="far fa-envelope"></i> adrienbitton@outlook.fr</a></li>
                            <li><a href="https://www.github.com/AdrienLyon" target="_blank" title="mon profil Github"><i class="fab fa-github-square"></i> GitHub</a></li>
                            <li><a href="https://www.linkedin.com/in/adrien-bitton-13bb1a201/" target="_blank" title="mon profil Linkedin"><i class="fab fa-linkedin"></i> Linkedin</a></li>
                            <li><a href="https://www.facebook.com/adrien.weblyon" target="_blank" title="ma page facebook"><i class="fab fa-facebook-square"></i> Facebook</a></li>
                        </ul>
                    </div>
                </div>
                <div class="navFooter col-md-3">
                    <nav class="footerNav ">
                        <h3>Navigation</h3>
                            <ol>
                                <li><a class="scrollClickMain" href="#">Accueil</a></li>
                                <li><a class="scrollClickServices" href="#service">Services</a></li>
                                <li><a class="scrollClickProjects" href="#projects">Réalisations</a></li>
                                <li><a class="scrollClickSkills" href="#skills">Compétences</a></li>
                                <li><a class="scrollClickContact" href="#contact">Contact</a></li>
                            </ol>
                            
                        </nav>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright © 2021 - www.adrienbittonweblyon.fr - Développeur web Freelance</p>
            </div>
        </footer>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > 15) {
                            $(".topBannerNav").addClass("sticky");
                        }else{
                            $(".topBannerNav").removeClass("sticky");
                        }

                        
                    });
                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > 15) {
                            $(".main").addClass("stickyMain");
                        }else{
                            $(".main").removeClass("stickyMain");
                        }

                        
                    });
                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > 15) {
                            $(".topBannerBlock").addClass("topBannerBlockhidden");
                        }else{
                            $(".topBannerBlock").removeClass("topBannerBlockhidden");
                        }

                        
                    });
                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > -1) {
                            
                            $(".scrollMain").addClass("scrollCssMain");                         
                        }else{                           
                            $(".scrollMain").removeClass("scrollCssMain");
                        }  

                    });
                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > 1300) {
                            $(".scrollMain").removeClass("scrollCssMain");
                            $(".scrollMain").addClass("scrollMainNormal");
                            $(".scrollServices").addClass("scrollCssServices")  ;                         
                        }else{                           
                            $(".scrollServices").removeClass("scrollCssServices");
                        }                       
                    });
                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > 2500) {
                            $(".scrollServices").removeClass("scrollCssServices");
                            $(".scrollProjects").addClass("scrollCssProjects");
                        }else{
                            
                            $(".scrollProjects").removeClass("scrollCssProjects");
                        }                       
                    });
                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > 3500) {
                            $(".scrollProjects").removeClass("scrollCssProjects");
                            $(".scrollSkills").addClass("scrollCssSkills") ;                          
                        }else{                           
                            $(".scrollSkills").removeClass("scrollCssSkills");
                        }                       
                    });
                });
            </script>
            <script type="text/javascript">
                $(function(){
                    $(window).scroll(function(){
                        if ($(window).scrollTop() > 4200) {
                            $(".scrollSkills").removeClass("scrollCssSkills");
                            $(".scrollContact").addClass("scrollCssContact");
                        }else{
                            
                            $(".scrollContact").removeClass("scrollCssContact");
                        }                       
                    });
                });
            </script>
            <script src="public/js/mapLeaf.js"></script>
            <script src="public/js/topBtn.js"></script>
            <script src="public/js/headerScroll.js"></script>
            <script src="public/js/navDown.js"></script>
    </body>
</html>
