<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * <?php

 *  * Template Name: Gummy Gallery
 
 *
 * @package smyle_co_
 */
get_header();

?>
<main id="primary" class="site-main">
<?php
		while ( have_posts() ) :
			the_post();


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    <section class="smyle-section container-fluid">

    </section>
    <?php the_content(); ?> 
</main>


<?php
get_footer();