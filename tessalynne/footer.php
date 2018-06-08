<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<?php do_action( 'foundationpress_before_footer' ); ?>
	
	<footer id="footer">
		<div class="row">
			<div class="small-12 medium-4 large-3 columns">
				<img id="contact-me" src="<?= get_stylesheet_directory_uri(); ?>/assets/graphics/contact-me.png" />
				<img class="profile-pic" src="<?= get_stylesheet_directory_uri(); ?>/assets/graphics/profile-tessa-lynne-jones.jpg" alt="Profile photo of Tessa Lynne Jones" />
				<div id="tele">304.771.6528</div>
				<div id="socials">
					<a href="https://www.facebook.com/tessa.jones.3956690" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.linkedin.com/in/sjones23/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
					<a href="mailto:tessa@tessalynne.com" class="email"><i class="fa fa-envelope"></i></a>
				</div>
			</div>
			
			<div class="small-12 medium-8 large-7 columns">
				<?= do_shortcode('[contact-form-7 id="57" title="Contact form 1"]'); ?>
				
			</div>
		</div>
    </footer>

	<?php do_action( 'foundationpress_after_footer' ); ?>
	<?php do_action( 'foundationpress_layout_end' ); ?>



<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99675891-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assets/javascript/app.js"></script>
</body>
</html>
