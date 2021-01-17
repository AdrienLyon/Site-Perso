<?php $title = 'Développeur Web à Lyon'; ?>
<?php ob_start(); ?>
<div class=main>
	<h1>Développeur web à Lyon</h1>
	<div class="bannerMain">
		<a href=""><i class="fas fa-chevron-left"></i></a>
		<div class="firstSlide col-md-6">
			<div class="wavy">
				<span style="--i:1;">HTML baby</span>
				<span style="--i:2;">CSS</span>
				<span style="--i:3;">PHP</span>
				<span style="--i:4;">Js</span>
				<span style="--i:5;">SQL</span>
			</div>
		</div>	
		<a href=""><i class="fas fa-chevron-right"></i></a>	
	</div>
	<div class="separationMain">
		<a href=""><i class="far fa-arrow-alt-circle-down"></i></a>
		
	</div>

</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

