<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package firbo-news
 */

?>

<div class="loop-post-link">
  <a onclick="hidePage()" class="post-loop-link" href="<?php the_permalink();?>">
    <div class="has_overlay-loop">
    </div>
    <div class="loop-post-image"
         style="background-image: url('<?php the_post_thumbnail_url('large');?>');"    >
     <div class="wrapLoopInfo">
      <div class="wrapLoopInfo__h4">
         <h4 class="secondary-block-header">
            <?php the_title();?>
         </h4>
        </div>
      <div class="wrapLoopInfo__additional">
         
           <!-- <ul class="loop-tags">                                   
                              <?php
                              $posttags = get_the_tags();
                              if ($posttags) {
                                 foreach($posttags as $tag) {
                                   echo '<li>' . $tag->name . '</li>'; 
                                 }
                              }
                              ?>
                           </ul> -->
         
        </div>
     </div>
</div>
</a>
<?php $categories = get_the_category();
if ( ! empty( $categories ) ) {
echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="loop-category-link">' . esc_html( $categories[0]->name ) . '</a>';
}; ?>
</div>
