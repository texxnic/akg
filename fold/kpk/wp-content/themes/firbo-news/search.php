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
         <div class="search-form-wrap">
				<form role="search" method="get" id="searchform" class="searchform search-page-form" action="<?php echo esc_url(home_url('/')); ?>">


                                
                                <input class="" id="searchinput" type="text" value="<?php echo get_search_query() ?>" class="" name="s">
                                <button class="" type="submit" id="searchsubmit">
                                  <i class="fal fa-search"></i>
                                </button>

                 </form>
			</div>   
               <div class="col-sm-12 main-content clearfix">
                  <div class="inner-wrap search-inner-wrap">
                     
						
		<?php if ( have_posts() ) : ?>

<!-- 			<header class="page-header search-page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					
					echo '<span>' . get_search_query() . '</span>';
					?>
				</h1>
			</header> -->
			
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
                    <!-- /inner wrap -->
                </div>
                
                
        </section>

<?php

get_footer();
