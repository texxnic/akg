<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firbo-news
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			<?php firbo_news_post_thumbnail(); ?>
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
                                       <div class="post-meta-content">
                                       	<span class="author">Автор: <a href="#" rel="author"><?php echo get_the_author_meta('user_firstname') . ' ' . get_the_author_meta('user_lastname'); ?></a></span>
                                          


                                          
                                             <span class="date"><i class="ti-calendar"></i><time datetime="2009-09-04T16:13:40-07:00" >
                                             	<?php $post_date = get_the_date('D M j');
            									echo $post_date;?></time>
            								</span>
                                             <span class="wathes"><i class="fal fa-eye"></i></i><?php if (function_exists('the_views')) {the_views();}?></span>

			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="post-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'firbo-news' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'firbo-news' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
                                              <ul class="tags "> 
                                              <h6>Тэги:</h6>                                  
										<?php
										$posttags = get_the_tags();
										if ($posttags) {
	  										foreach($posttags as $tag) {
	  										  echo '<li><a href="" class="tag">' . $tag->name . '</a></li>'; 
	  										}
										}
										?>
									</ul>
	<footer class="entry-footer">
		<?php firbo_news_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
