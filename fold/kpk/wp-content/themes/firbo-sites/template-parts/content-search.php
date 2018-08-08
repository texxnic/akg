<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firbo-news
 */

?>

<div class="item col-sm-6 secondary-post">
   zazazaz
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
                                          <span class="commnets"><i class="ti-comment"></i><?php echo get_comments_number(); ?></span></span>
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
