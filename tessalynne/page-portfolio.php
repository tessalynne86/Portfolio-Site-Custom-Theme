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
<main name="portfolio" role="main">


<div class="row expanded">
	<div class="small-1 columns"><img class="homepage-slider prev" src="<?=get_stylesheet_directory_uri(); ?>/assets/graphics/homepage-slider-prev.png" /></div>
	<div class="small-10 columns">
		<div id="slider">
		<?php

		$query = new WP_Query( array( 'post_type' => 'my-work', 'orderBy' => 'date', 'order' => 'ASC', 'category_name' => 'featured' ) );

		if($query->have_posts()) {

			while($query->have_posts()): $query->the_post(); ?>

			<div class="slide">
				<div class="row expanded">						
					<div class="small-12 medium-6 columns">
						<h2 class="title"><?=the_title(); ?></h2>
						<p class="description"><?=the_content(); ?></p>
						<p class="features">Key Features:</p>
						<ul class="feature-points">
						<?php 
							$postid = get_the_ID();
							$meta = get_post_meta($postid);
							
							foreach($meta['key_features'] as $feature):	?>
							<li><?=$feature; ?></li>
							<?php endforeach; ?>
							
						</ul>
                                                <a href="<?= the_permalink(); ?>" class="read-more" title="<?=the_title(); ?>">Visit Project Page <i class="fa fa-chevron-circle-right"></i></a>
					</div>
					<div class="small-12 medium-6 columns">
						<img data-lazy="<?=the_post_thumbnail_url(); ?>" />
					</div>
				</div>
			</div>
			<?php 
			endwhile;

		}

		?>
		</div>
		
		<link type="text/css" rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/assets/javascript/slick-1.6.0/slick/slick.css" />
		<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assets/javascript/slick-1.6.0/slick/slick.min.js"></script>
		<script type="text/javascript" defer="true">
			$(document).ready(function() {
				var prev_arrow = $(".homepage-slider.prev");
				var next_arrow = $(".homepage-slider.next");
				var portfolio_args = {
					'arrows': true,
					'prevArrow': prev_arrow,
					'nextArrow': next_arrow,
					'fade': true,
					'speed': 750
				};
				$("#slider").slick(portfolio_args);
			});
		</script>

	</div>
	<div class="small-1 columns"><img class="homepage-slider next" src="<?=get_stylesheet_directory_uri(); ?>/assets/graphics/homepage-slider-next.png" /></div>
</div>









	
	
	
</main>

<?php get_footer();
