<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<main name="resume" role="main">
<?php while(have_posts()): the_post();  ?>
<section name="about-me">
<div class="row">
	<div class="small-12 medium-12 large-8 columns">
		<h2><img src="<?= get_stylesheet_directory_uri(); ?>/assets/graphics/about-me.png" alt="About Tessa Lynne Jones"/></h2>
		<p><?php the_content(); ?></p>
	</div>
	<div class="small-12 medium-12 large-4 columns">
		<h2><img src="<?= get_stylesheet_directory_uri(); ?>/assets/graphics/software.png" alt="My Software Skills"/></h2>
		<ul class="software-skills">
			<li>WordPress Development</li>
			<li>Drupal Development</li>
			<li>Joomla Development</li>
			<li>Adobe Photoshop CC</li>
			<li>Adobe Illustrator CC</li>
			<li>Adobe Dreamweaver CC</li>
			<li>Adobe InDesign CC</li>
			<li>Google Analytics</li>
			<li>Google DoubleClick</li>
			<li>Google AdSense</li>
			<li>Google Adwords</li>
			<li>Chartbeat</li>
			<li>Microsoft Office</li>
		</ul>
	</div>
	<div class="small-12 medium-12 large-4 columns">
		<h2><img src="<?= get_stylesheet_directory_uri(); ?>/assets/graphics/languages.png" alt="My Programming Languages"/></h2>
		<ul class="software-skills">
			<li>HTML 5</li>
			<li>CSS 3 +/- SASS</li>
			<li>Javascript &amp; JQuery</li>
			<li>PHP</li>
			<li>MYSQL</li>
		</ul>
	</div>
</div>
</section>


		


<div class="row">
	<div class="small-12 columns">
		<section name="career-history">
			<h2><img src="<?= get_stylesheet_directory_uri(); ?>/assets/graphics/career-history.png" alt="My Career History" /></h2>
			<div class="row">
				<div class="small-12 medium-12 large-6 columns">
					<div class="section-card">
						<h4>Digital Marketing Consultant</h4>
						<p class="employer"><strong>West Virginia Press Association</strong> • Charleston, WV</p>
						<p class="employment-dates">Feb 23, 2017 - Present</p>
						<strong>Responsibilities:</strong>
						<ul class="responsibilities">
							<li>Training WVPA staff how to use Google DoubleClick to traffick ads on their websites and how to produce reports for clients</li>
							<li>Generating Google Analytics reports for staff to better understand their market</li>
							<li>Providing detailed digital ad inventory forecasts and marketing proposals as needed</li>
							<li>On-going support as needed.</li>
						</ul>
					</div>
				</div>
				<div class="small-12 medium-12 large-6 columns">
					<div class="section-card">
						<h4>Full-Stack Website Developer</h4>
						<p class="employer"><strong>Charleston Newspapers</strong> • Charleston, WV</p>
						<p class="employment-dates">May 26, 2012 - Feb 3, 2017</p>
						<strong>Responsibilities:</strong>
						<ul class="responsibilities">
							<li>Spearheading interdepartmental teams to plan websites that work for both the newsroom and retail advertising</li>
							<li>Designing and developing websites and campaigns at all stages for most major projects</li>
							<li>Trafficking ads for retail advertising, managing digital inventory &amp; developing new ad zones for all device types</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="row">
	<div class="small-12 columns">
		<section name="career-history">
			<h2><img src="<?= get_stylesheet_directory_uri(); ?>/assets/graphics/education.png" alt="My Education" /></h2>
			<div class="row">
				<div class="small-12 medium-12 large-6 columns">
					<div class="section-card">
						<h4>Graphic Design Technology</h4>
						<p class="employer"><strong>Fairmont State University</strong> • Fairmont, WV</p>
						<p class="employment-dates">Graduated in 2012 with Bachelor's Degree</p>
					</div>
				</div>
				<div class="small-12 medium-12 large-6 columns">
					<div class="section-card">
						<h4>Advertising</h4>
						<p class="employer"><strong>West Virginia University</strong> • Morgantown, WV</p>
						<p class="employment-dates">Graduated in 2008 with Bachelor's Degree</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php endwhile; ?>










	
	
	
</main>

<?php get_footer();
