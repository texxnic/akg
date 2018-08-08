<?php
/**
 * 
Template Name: simplePage
 * 
 */

get_header(); the_post(); ?>

<div class="contWrapper">
		<div id="uchastok">
			<div class="dimm">
				<div class="container">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
			</div>
		</div>
		<div class="container pageContent">
			<?php the_content(); ?>
		</div>
	</div>


	
	<?php get_footer(); ?>