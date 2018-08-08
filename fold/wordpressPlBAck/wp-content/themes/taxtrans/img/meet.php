<?php
/**
* Template Name: meet
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package taxtrans
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <!-- Use any element to open the sidenav -->
        <div id="main" class="priceListMain">
            <div class="pageJumbo meetBG">
                <h2 class="whiteTxt animated zoomIn txtShadow"><?php the_title(); ?></h2>
            </div>
            <div class="container pageContent contetPaddings">
                
                <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_type() );

   

    endwhile; // End of the loop.
    ?>
            </div>
            <!-- #primary -->
            <?php
get_sidebar();


get_footer();
