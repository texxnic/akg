<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package firbo-news
 */

get_header();
?>

<section id="page" class="container news">
            <div class="row">
               <div class="col-sm-8 main-content clearfix">
                  <div class="inner-wrap">
                     <hr data-symbol="GALLERY POST">
                     <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );



			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>
                     <!-- blog post footer -->
                     <div class="share-wrap">
                        <h6>Поделитесь этой новостью в соц. сетях:</h6>
                        <div class="share-buttons">
                           <a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode('Посмотрите какая новость:') . '&url=' . rawurlencode( get_permalink());?>" class="button twitter">
                           <i class="ti-twitter"></i> Twitter
                           </a>

                           <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink()?>" class="button facebook">
                           <i class="ti-facebook"></i> Facebook
                           </a>
                           <a class="button google-plus">
                          <i class="fab fa-google-plus-g"></i> Google+
                           </a>
                           <a href="https://vk.com/share.php?url=<?php echo get_permalink()?>"class="button vk">
                           <i class="fab fa-vk"></i> Вконтакте
                           </a>
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="post-navigation direction-nav row">

                            <?php
								$previous_post = get_previous_post();
								if (!empty( $previous_post )): ?>
								                             <div class="col-sm-6 text-left">
                              <a href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>" class="iconBox iconBox--left">
                                 <div class="iconBox-icon">
                                    <span class="ti-arrow-left"></span>
                                 </div>
                                 <div class="iconBox-content">
                                    <h4 class="iconBox-title">
                                       Предыдущая новость
                                    </h4>
                                    <p>
                                       <?php echo esc_attr( $previous_post->post_title ); ?>
                                    </p>
                                 </div>
                              </a>
                           </div>
							<?php endif; ?>

                           <?php
								$next_post = get_next_post();
								if (!empty( $next_post )): ?>
								                             <div class="col-sm-6 text-left">
                              <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="iconBox iconBox--right">
                                 <div class="iconBox-icon">
                                    <span class="ti-arrow-right"></span>
                                 </div>
                                 <div class="iconBox-content">
                                    <h4 class="iconBox-title">
                                       Следующая новость
                                    </h4>
                                    <p>
                                       <?php echo esc_attr( $next_post->post_title ); ?>
                                    </p>
                                 </div>
                              </a>
                           </div>
							<?php endif; ?>
                        </div>
                     </div>
                     <!-- <hr class="mBtm-50 mTop-30" data-symbol="RECOMENDED FOR YOU"> -->
                     <div class="">
                        <?php //echo do_shortcode( ' [wpb-random-posts] ' ); ?>
                     </div>
                     <article class="space-sm">
                        
                        <?php          if ( comments_open() || get_comments_number() ) :
            comments_template();
         endif; ?>
                     </article>
                  </div>
                  <!-- /.inner wrap -->
               </div>
               <div class="col-sm-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
        <!--  Start Bottom post sarousel -->
        

<?php

get_footer();
