<?php $title = 'Développeur Web à Lyon'; ?>
<?php ob_start(); ?>
<div class=main>
	<h1><span class="mainTitle">Développeur web Freelance - site vitrine</span></h1>
	<div class="bannerMain"></div>

	<div class="resume">
		<h3>Développeur web à Lyon </h3>
		<p>Je m'appel Adrien Bitton, je suis un<span class="boldText"> développeur web Freeelance</span> passioné de la culture web et des langages de programmations.</p>
		<p>Je vous propose mes services pour la <span class="boldText">création de site vitrine sur mesure</span>.</p>
		<p>Un design <span class="boldText">100% sur mesure</span> et <span class="goldText">un site web de haute qualité</span> sont mes engagements pour répondre à vos besoins.</p>
		<p>Une question sur un projet web ? <a href="">Contactez moi</a></p>
	</div>
	<div class="bannerSeparation" id="service">
		<h2>Développeur web Freelance</h2>
		<p>Création de site vitrine 100% sur mesure</p>
	</div>
	<div class="serviceMain">
		<div class="sectionTitle">
		<h3>Mes services de développement web </h3>
		</div>
		<div class="serviceBlock container">
			<div class="creation col-md-4">
				<img src="public/images/ico1.png" alt="icon_website">
				<h4>Un design 100% sur mesure</h4>
				<p>Je m'applique à trouver le design qui correspond le mieux à votre secteur d'acitivité et à vos goûts personnels.</p>
			</div>
			<div class="integration col-md-4">
				<img src="public/images/ico6.png" alt="icon_quality">
				<h4>Responsive quality</h4>
				<p>Site vitrine responsive design, adaptable à tout type d'écran (PC, tablette, smartphone).</p>
			</div>
			<div class="hebergement col-md-4">
				<img src="public/images/ico5.png" alt="icon_web">
				<h4>Hébergement du site</h4>
				<p>Solutions pour un nom de domaine et un hébergement rapide et sûr de votre site web</p>
			</div>
			
		</div>
		<div class="bannerSeparation">
		<h2>Développeur Freelance Lyon</h2>
		<p>Besoin d'un site vitrine ?<a href=""> Contactez moi</p>
	</div>
	</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

