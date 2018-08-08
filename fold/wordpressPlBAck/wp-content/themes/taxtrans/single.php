<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package taxtrans
 */

get_header(); ?>

	<div id="primary" class="content-area">
		

    <!-- Use any element to open the sidenav -->

    <div id="main" class="priceListMain">

       <div class="pageJumbo">
           <h2 class="whiteTxt animated zoomIn"><?php the_title(); ?></h2>
       </div>
       <div class="container pageContent contetPaddings">
  <?php
    while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', get_post_type() );

   

    endwhile; // End of the loop.
    ?>
       
	
	</div><!-- #primary -->

<?php
get_sidebar();


get_footer();
