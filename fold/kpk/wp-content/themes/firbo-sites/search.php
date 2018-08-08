<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Поиско по: %s', 'firbo-news' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			 

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
