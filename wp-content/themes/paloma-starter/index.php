<?php get_header(); ?>
	<main>
		<section>
			<div id="pagrindinis" class="head-img">
				<img src= "<?php the_field('pagrindine_foto', 70)?>">
			</div>
			<div class="logo">
				<img src= "<?php the_field('logo', 70) ?>">
			</div>
		</section>
		<section>
			<div id="apie-mus" class="about-container">

				<div class="about-text-and-boxes">
					<h1 class="txtcenter"><?php the_field('apie_mus_text', 70) ?></h1><br>
					<p class="txtcenter"><?php the_field('apie_mus', 70) ?></p>
				</div>
	<!-- </section> -->
	<!-- ABOUT SECTION STARTS -->

	<!-- ABOUT BOXES SECTION STARTS -->
	<!-- <section> -->
		<div class="container-about">
			<div class="adds">
				<div class="add-item">
					<div class="bord">
						<p><?php the_field('kategorija1', 70) ?></p>
					</div>
				</div>
				<div class="add-item">
					<div class="bord">
						<p><?php the_field('kategorija2', 70) ?></p>
					</div>
				</div>
				<div class="add-item">
					<div class="bord">
						<p> <?php the_field('kategorija3', 70) ?></p>
					</div>
				</div>
				<div class="add-item">
					<div class="bord">
						<p> <?php the_field('kategorija4', 70) ?></p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
		<!-- ABOUT BOXES SECTION ENDS -->

	<!-- DIENOS PIETUS SECTIONS STARTS -->
	<section>
		<div id="dp" class="sec-img">
			<img src="<?php the_field('dienos_pietus_foto', 70)?>">
					<div class="sec-img-p">
						<p>DIENOS <br> PIETŪS</p>
					</div>
					<div class="circle-button-container">
						<button class="btn scroll-down">
							<i class="fas fa-arrow-down"></i>
						</button>
					</div>
		</div>
	</section>
	<!-- DIENOS PIETUS SECTIONS ENDS -->

	<!-- DIENOS PIETUS SECTION 2 STARTS -->
	<section>
		<div id="button" class="main-pietus-container">
			<div class="pietus-container">
				<div class="left-side">
					<div class="pietus-item">
						<img src="<?php the_field('1_sriuba', 70) ?>">
						<div class="overlay">
							<div class="text"><?php the_field('1_sriubos_pavadinimas', 70) ?></div>
						</div>
						<p>Pirmas pasirinkimas</p>
					</div>
					<div class="pietus-item">
						<img src="<?php the_field('1_patiekalas', 70) ?>">
						<div class="overlay">
							<div class="text"><?php the_field('1_patiekalo_pavadinimas', 70) ?></div>
						</div>
					</div>
			</div>
			<div id="vertical-line"></div>
			<div class="right-side">
					<div class="pietus-item">
						<img src="<?php the_field('2_sriuba', 70) ?>">
						<div class="overlay">
							<div class="text"><?php the_field('2_sriubos_pavadinimas', 70) ?></div>
						</div>
						<p>Antras pasirinkimas</p>
				</div>

					<div class="pietus-item">
						<img src="<?php the_field('2_patiekalas', 70) ?>">
						<div class="overlay">
							<div class="text"><?php the_field('2_patiekalo_pavadinimas', 70) ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- DIENOS PIETUS SECTION 2 ENDS -->

<!-- MAIN MENIU 1 SECTION STARTS -->
	<section>
		<div id="pagrindinis-meniu" class="sec-img">
			<img src="<?php the_field('meniu_section_foto', 70) ?>">
					<div class="sec-img-p-2">
						<p>PAGRINDINIS<br>MENIU</p>
					</div>
					<div class="circle-button-container">
						<button class="btn scroll-down1">
							<i class="fas fa-arrow-down"></i>
						</button>
					</div>
		</div>
	</section>

	<!-- MAIN MENIU 1 SECTION ENDS -->

	<!-- MAIN MENIU 2 SECTION STARTS -->
	<section>
		<div class="main-meniu">
			<!-- <div class="main-bacground-picture">
				<img src="43211.png" alt=""> -->

			<ul>
        <br><br>
				<ul>
					<li> <strong><?php the_field('užkandžiai', 70) ?></strong></li>
					<li><?php the_field('uzkandis1', 70) ?></li>
					<li><?php the_field('uzkandis2', 70) ?></li>
					<li><?php the_field('uzkandis3', 70) ?></li>
					<li><?php the_field('uuzkandis4', 70) ?></li>
					<li><?php the_field('uzkandis5', 70) ?></li>
				</ul>
				<br>
				<ul>
					<li><?php the_field('sriubos', 70) ?></li>
					<li><?php the_field('sriuba1', 70) ?></li>
					<li><?php the_field('sriuba2', 70) ?></li>
				</ul>
				<br>
				<ul>
					<li><?php the_field('salotos', 70) ?></li>
					<li><?php the_field('salotos1', 70) ?></li>
					<li><?php the_field('salotos2', 70) ?></li>
				</ul>
				<br>
				<ul>
					<li><?php the_field('pagrindiniai_patiekalai', 70) ?></li>
					<li><?php the_field('pagrindinis_patiekalas1', 70) ?></li>
					<li><?php the_field('pagrindinis_patiekalas2', 70) ?></li>
					<li><?php the_field('pagrindinis_patiekalas3', 70) ?></li>
					<li><?php the_field('pagrindinis_patiekalas4', 70) ?></li>
					<li><?php the_field('pagrindinis_patiekalas5', 70) ?></li>
					<li><?php the_field('pagrindinis_patiekalas6', 70) ?></li>
					</ul>
					<br>
				<ul>
					<li><?php the_field('desertai', 70) ?></li>
					<li><?php the_field('desertas1', 70) ?></li>
					<li><?php the_field('desertas2', 70) ?></li>
				</ul>
			</ul>
		</div>
	</div>
	</section>
<!-- MAIN MENIU 2 SECTION STARTS -->

<!-- MENIU GALLERY SECTION STARTS -->
	<section>
			<div id="galerija" class="sec-img">
				<img src="<?php the_field('meniu_galerija_photo', 70) ?>" alt="">
				<div class="sec-img-p-3">
					<p>MENIU<br>GALERIJA</p>
			</div>
		</div>
	</section>
<!-- MENIU GALLERY SECTION ENDS -->

<!-- MENIU GALLERY PHOTOS SECTION STARTS -->
<section>
	<div class="gallery-main-container">
	<div class="container-gallery">
    <?php wp_nav_menu(array(
      'theme_location' => 'menu-photos',
      'container' => false,
      'menu_class' => 'menu-photos'
    )); ?>


		<!-- <ul class="menu-photos">
			<li class="button active" data-filter="all" >VISI PATIEKALAI</li>
			<li class="button" data-filter="snacks">UŽKANDŽIAI</li>
			<li class="button" data-filter="soups">SRIUBOS</li>
			<li class="button" data-filter="main">PAGRINDINIAI PATIEKALAI</li>
			<li class="button" data-filter="desserts">DESERTAI</li> -->
			<!-- <div style="clear:both;"></div> -->
		<!-- </ul> -->
	</div>
	</div>
</section>
<!-- MENIU GALLERY PHOTOS SECTION ENDS -->

<!-- PHOTOS STARTS -->

<?php
$galerija_arguments=array(
  'post_type' => 'galerija',
  'posts_per_page' => -1,
  'orderby' => 'date',
  'order' => 'ASC'
);

$galerija = new WP_Query($galerija_arguments);
// echo "<pre>";
// var_dump($galerija);
// echo "</pre>";
 ?>

	<section>
		<div class="main-photos-container">
			<div class="photos-container">
        <?php while($galerija->have_posts()) : $galerija->the_post(); ?>
				<div class="photos-item all snacks">
					<img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title();?>" class="image">
				  <div class="overlay">
				    <div class="text"><?php the_title();?></div>
				  </div>
				</div>
      <?php endwhile; ?>

				<!-- <div class="photos-item all snacks">
					<img src="images/12.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all snacks">
					<img src="images/3.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all snacks">
					<img src="images/1.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all soups">
					<img src="images/1.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all soups">
					<img src="images/3.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all main">
					<img src="images/2.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all desserts">
					<img src="images/12.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all main">
					<img src="images/3.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all main">
					<img src="images/1.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all desserts">
					<img src="images/50.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all main">
					<img src="images/49.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all main">
					<img src="images/48.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all main">
					<img src="images/47.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all desserts">
					<img src="images/46.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div>
				<div class="photos-item all desserts">
					<img src="images/45.jpg">
					<div class="overlay">
				    <div class="text">Patiekalo pavadinimas</div>
				  </div>
				</div> -->
			</div>
		</div>
	</section>
<!-- PHOTOS ENDS -->

<!-- REZERVATION SECTION STARTS -->
<section>
		<div id="rezervacija" class="sec-img">
			<img src="<?php the_field('rezz_pagr_foto', 70) ?>" alt="">
			<div class="sec-img-p-4">
				<p>REZERVACIJA</p>
		</div>
		<div class="">
		<div class="rezervation-text">
			<p><?php the_field('rezervacija_url', 70) ?></p>
      <p><?php the_field('rezervacija_url2', 70) ?> <a target="_blank" href="http://www.tablein.com/lt/"><u><?php the_field('rezervacija_url3', 70) ?></u></a></p>
		</div>
		</div>
	</div>
</section>
<!-- REZERVATION SECTION ENDS -->

<!-- CONTACT SECTION STARTS -->


<section>
		<div id="kontaktai" class="sec-img1">
			<div class="images-contact">
			<img src="<?php the_field('kontaktai_pagr_foto', 70) ?>" alt="">
			</div>
			<div class="sec-img-p-5">
				<p><?php the_field('konktaktai_title', 70) ?></p>
			</div>
			<div class="contact-text">
				<p><b>VIETA: </b><?php the_field('kavines_vieta', 70) ?></p>
				<p><b>DARBO LAIKAS:</b><?php the_field('darbo_laikas', 70) ?></b> </p>
				<p><b>Pr.- Pn.</b>  <?php the_field('darbo_dienos', 70) ?></p>
				<p><b>Št. - Sk.</b> <?php the_field('savaitgalis', 70) ?></p>
				<p><b>tel.nr.:</b> <?php the_field('tel.nr', 70) ?></p>
				<p><b>el.paštas:</b> <?php the_field('el.pastas', 70) ?></p>
			</div>
			<div class="circle-button-container1">
				<button class="btn scroll-down2">
					<i class="fas fa-arrow-down"></i>
				</button>
			</div>
			<div class="social-icons-img">
				<div class="instgram">
					<a target="_blank" href="https://www.instagram.com/palomabistro/">
						<img src="<?php the_field('instagram-icon', 70) ?>" alt="instagram-icon">
					</a>
				</div>
				<br>
				<div class="facebook">
					<a target="_blank" href="https://www.facebook.com/palomavilnius/">
						<img src="<?php the_field('facebook-icon', 70) ?>" alt="instagram-icon">
					</a>
				</div>
				<br>
				<div class="twitter">
					<a target="_blank" href="https://twitter.com/">
						<img src="<?php the_field('twitter-icon', 70) ?>" alt="instagram-icon">
					</a>
				</div>
			</div>
	</div>
</section>
<section>
	<div class="outside-photo">
		<img src="<?php the_field('outside-photo', 70) ?>" alt="">
	</div>
</section>
<!-- CONTACT SECTION ENDS -->

<!-- MAP SECTION STARTS -->
<section>
	<div class="map-container">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.7401176681374!2d25.292830516128976!3d54.714195280288386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96b3de46b3a1%3A0x8f35e001ffe1a76d!2sPaloma!5e0!3m2!1slt!2slt!4v1520199634286" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>
