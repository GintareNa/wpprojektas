<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" >
	<!-- <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="fontai/stylesheet.css"> -->
  <?php wp_head(); ?>
</head>
<body>
	<!-- HEADER MENIU STARTS -->
	<header>
		<div class="container">
			<nav>
      <?php wp_nav_menu(array(
        'theme_location' => 'top-menu',
        'container' => false,
        'menu_class' => 'top-menu'
      )); ?>
			<!-- <ul class="top-menu">
						<button class="burger">
							<span class="bar"></span>
							<span class="bar"></span>
							<span class="bar"></span>
						</button>

				<li><a href="#pagrindinis">Pagrindinis</a></li>
				<li><a href="#apie-mus">Apie mus</a></li>
				<li><a href="#dienos-pietus">Dienos pietūs</a></li>
				<li><a href="#pagrindinis-meniu">Pagrindinis meniu</a></li>
				<li><a href="#galerija">Galerija</a></li>
				<li><a href="#rezervacija">Rezervacija</a></li>
				<li><a href="#kontaktai">Kontaktai</a></li>
			</ul> -->
		</nav>
		</div>
	</header>
