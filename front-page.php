<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package smyle_co_
 */
get_header();

?>
<main id="primary" class="site-main">

    <section class="smyle-section container-fluid">
    <div class="main bg-info">


       <div class="loader">
        <div class="text">
            <p>Smyle_Co_ A San Diego Based Company</p>
        </div>
        <span><i></i></span>
       </div>



</div>
    </section>
    <?php the_content(); ?> 
</main>


<?php
get_footer();
