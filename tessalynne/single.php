<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<main name="portfolio" role="main">
    <?php do_action( 'foundationpress_before_content' ); ?>
    <?php while(have_posts()): the_post(); ?>
    
    <div class="row">
        <div class="small-12 medium-6 columns">
            <h2><?php the_title(); ?></h2>
            <div class="article-content">
                <?php the_content(); ?>
                <p class="features">Key Features:</p>
                <ul class="feature-points">
                <?php 
                        $postid = get_the_ID();
                        $meta = get_post_meta($postid);

                        foreach($meta['key_features'] as $feature):	?>
                        <li><?=$feature; ?></li>
                        <?php endforeach; ?>

                </ul>
            </div>
        </div>
        <div class="small-12 medium-6 columns">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    
    <?php endwhile; ?>
    <?php do_action( 'foundationpress_after_content' ); ?>
</main>

<?php get_footer();
