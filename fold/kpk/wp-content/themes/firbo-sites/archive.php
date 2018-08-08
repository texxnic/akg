<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firbo-news
 */

get_header();
?>
        <section id="page" class="container">
            <div class="row">
               <div class="col-sm-8 main-content clearfix">
                  <div class="inner-wrap">
                     <hr data-symbol="LATEST POST">
						<div class="row">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

                     </div>

                    </div>
                    <!-- /inner wrap -->
                </div>
                <div class="col-sm-4">
                    <?get_sidebar();?>
        </section>


<?php

get_footer();
