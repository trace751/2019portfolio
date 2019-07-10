<?php get_header(); ?>


<!-- Main Image -->
	<div class="hero-body">
		<div class="hero-left">
			<h4><?php echo get_theme_mod('hero_subtitle', 'UX/UI Design') ?></h4>
			<h1><?php echo get_theme_mod('hero_title', 'Creative Designer'); ?></h1>
			<p><?php echo get_option('blogdescription', 'I help my clients develop an online presence through user-friendly designs and an optimized website for search engines'); ?></p>

<?php
//instagram
$igvalue = get_theme_mod('instagram', 'https://instagram.com');

//gh
$ghvalue = get_theme_mod('github', 'https://github.com/trace751');

//fb
$fbvalue = get_theme_mod('facebook', 'https://www.facebook.com/HungryRam/');

//stack
$stackvalue = get_theme_mod('stackoverflow', 'https://stackoverflow.com/users/5496013/ram-dettmer');

//linkedin
$linkedinvalue = get_theme_mod('linkedin', 'https://www.linkedin.com/in/ram-dettmer-901406b1/');

if ( !empty($igvalue) )
	echo '<a href="' . $igvalue . '" target="_blank" class="hidden">Instagram </a>';

if ( !empty($ghvalue))
	echo '<a href="' . $ghvalue . '" target="_blank" class="hidden">Github </a>';

if ( !empty($fbvalue))
	echo '<a href="' . $fbvalue . '" target="_blank" class="hidden">Facebook </a>';

if ( !empty($stackvalue))
	echo '<a href="' . $stackvalue . '" target="_blank" class="hidden">Stackoverflow </a>';

if ( !empty($linkedinvalue))
	echo '<a href="' . $linkedinvalue . '" target="_blank" class="hidden">Linkedin </a>';
	?>

<!-- <div class="dash"></div> -->
		</div>
	</div>
	<div class="intro-01">
		<div class="intro-text">
			<h4>01</h4>
			<h1><?php echo get_theme_mod('intro_text', 'Im Ram Dettmer'); ?></h1>
			<p><?php echo get_theme_mod('intro_paragraph', 'I discovered my passion for design and development through my interest of being drawn to creating something from scratch. My skills are broad ranging from design, user experience, and front end to back end development. I enjoy putting things together and the feeling of accomplishment when finalizing my projects.') ?></p>
		</div>
		<div class="intro-img">
			
		</div>
	</div>

	<div class="intro-02">
		<div class="intro-02-container">
		<div class="intro-text">
			<h4>02</h4>
				<h1>Skills</h1>
		</div>
		<div class="skillset">
			<div class="skill01 skillbox">
				<h4>Web Development</h4>
				<p>My passion is creating websites from scratch and enjoy bringing ideas to life.</p>
			</div>
			<div class="skill02 skillbox">
				<h4>Web Design</h4>
				<p>I focus on simplicity and the ease of user experience to make sure visitors find the information they need.</p>
			</div>
			<div class="skill03 skillbox">
				<h4>Facebook Marketing</h4>
				<p>Working in a marketing company taught me how to utilize Facebook advertisement</p>
			</div>
		</div>
	</div>
<!-- End Intro 02 -->

<!-- Portfolio -->

<div class="portfolio">
	<div class="portfolio-left">
		<h4>Weather API</h4>
		<p>This was my first project playing around with OpenWeather API while practicing some design skills. This fun little project was built using PHP</p>
	</div>
	<div class="portfolio-right"><img src="<?php bloginfo('template_url'); ?>/assets/finalweather.jpg"></div>
</div>
<div class="portfolio">
	<div class="portfolio-left">
		<h4>Dj Victamone</h4>
		<p>I offered a friend to redesign his website for his DJ business because he was strugging to get a new design in place. What are friends for!</p>
	</div>
	<div class="portfolio-right"><img src="<?php bloginfo('template_url'); ?>/assets/dj2.jpg"></div>
</div>
<div class="portfolio">
	<div class="portfolio-left">
		<h4>My Website</h4>
		<p>My website has gone through many changes. Hand coded with love and a lot of time in design. Sometimes spending time on my own website takes up the most time and I end up with a simple design. The struggle.</p>
	</div>
	<div class="portfolio-right"><img src="<?php bloginfo('template_url'); ?>/assets/ramfinal.png"></div>
</div>
<div class="portfolio">
	<div class="portfolio-left">
		<h4>Anita the Realtor</h4>
		<p>Anita came across my work and wanted me to redesign her website. I had just created a child theme on Wordpress using the Genesis framework. Added features to the child theme and made it geared towards real estate. This allowed her to easily go in and change colors or pictures.</p>
	</div>
	<div class="portfolio-right"><img src="<?php bloginfo('template_url'); ?>/assets/anitafinal.jpg"></div>
</div>

<!-- End Portfolio -->
	<div class="footer">
		<div class="footer-intro">
			<h4>Want to get in touch?<br>Let's Connect!</h4>
			<p>Email:</p>
			<a href="mailto:ramdettmer751@gmail.com">ramdettmer751@gmail.com</a>
		</div>
		<div class="sub-footer">
		</div>
	</div>
	
<?php get_footer(); ?>