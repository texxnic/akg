<?php if (have_posts()) {
    while (have_posts()) {
        the_post();?>
								<?php $i++?>
								<?php if ($i == 1) {?>
								<div <?php echo post_class('col-md-12') ?> id="post-<?php the_ID();?>">
                              <article class="post">
                                 <div class="post-media-big">
                                    <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('full');?>
                                    </a>

                                 </div>
                                 <header>
                                    <!-- blog post header -->
                                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                 </header>

                                 <footer>
									<div class="post-meta clearfix">
                                    <!-- blog post footer -->

	

                                       <div class="post-meta-content">
                                       	<span class="author">Автор: <a href="#" rel="author"><?php echo get_the_author_meta('user_firstname') . ' ' . get_the_author_meta('user_lastname'); ?></a></span>
                                          <span class="categories-links">Категория:
                                          <a href="#" rel="category tag"><?php get_the_category_list();?></a>,


                                          
                                             <span class="date"><i class="ti-calendar"></i><time datetime="2009-09-04T16:13:40-07:00" >
                                             	<?php $post_date = get_the_date('D M j');
            									echo $post_date;?></time>
            								</span>
                                             <span class="wathes"><i class="fal fa-eye"></i></i><?php if (function_exists('the_views')) {the_views();}?></span>
                                             <span class="commnets"><i class="ti-comment"></i>
<?php echo get_comments('count=true'); ?></span>
                                          
                                    <ul class="tags">                                   
										<?php
										$posttags = get_the_tags();
										if ($posttags) {
	  										foreach($posttags as $tag) {
	  										  echo '<li><a href="" class="tag">' . $tag->name . '</a></li>'; 
	  										}
										}
										?>
									</ul>
                                       </div>
										
                                       <!-- /meta conetnt -->
                                    </div>
                                 </footer>
                              </article>
                           </div>
<?php } else {?>
		                         <div class="item col-sm-6 secondary-post">
                              <article class="sec-post-wrap">
                                 <div class="post-media">
                                    <a href="<?php the_permalink();?>">
                                    <?php the_post_thumbnail('full');?>
                                    </a>
                                 </div>
                                 <header>
                                    <!-- blog post header -->
                                    <h4 class="secondary-block-header"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                 </header>

                                 <footer>
                                    <!-- blog post footer -->
                                    <div class="post-meta clearfix">
                                       <div class="post-meta-content no-avatar">
                                          <span class="date"><i class="ti-calendar"></i><time datetime="2009-09-04T16:13:40-07:00" >
                                                <?php $post_date = get_the_date('D M j');
                                       echo $post_date;?></time>
                                    </span>
                                          <span class="wathes"><i class="fal fa-eye"></i></i><?php if (function_exists('the_views')) {the_views();}?></span>
                                          <span class="commnets"><i class="ti-comment"></i><?php echo get_comments('count=true'); ?></span></span>
                                     <ul class="tags">                                   
										<?php
										$posttags = get_the_tags();
										if ($posttags) {
	  										foreach($posttags as $tag) {
	  										  echo '<li><a href="" class="tag">' . $tag->name . '</a></li>'; 
	  										}
										}
										?>
									</ul>
                                       </div>

                                       <!-- /meta conetnt -->
                                    </div>
                                 </footer>
                              </article>
                           </div>
                           <?php } /* конец while первого поста*/?>
	<?php } /* конец while */?>



<?php
} // конец if
else {
    echo "<h2>Записей нет.</h2>";
}
?>