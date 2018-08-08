<?php
/**
* Template Name: hellomafaka
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package taxtrans
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <!-- Use any element to open the sidenav -->
        <div id="main" class="priceListMain">
            <div class="pageJumbo driverBG">
                <h2 class="whiteTxt animated zoomIn"><?php the_title(); ?></h2>
            </div>
            <div class="container pageContent contetPaddings">
                
               <?php
// define mysql connect
$dbname = "u0365749_wp308";
$dbuser = "u0365749_wp308";
$dbpass = "!kS70asp0.";
$dbhost = "localhost"; // this can usually stay 'localhost'
 
$wp_table = "wpuz_posts"; // define wordpress table name  
 
$gmt_offset = '-3'; // -8 for California, -5 New York, +8 Hong Kong, etc.
 
$min_days_old = 1; // the minimum number of days old
$max_days_old = 900; // the maximum number of days old
 
// connect to db
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
 
 
$result = mysql_query("SELECT ID FROM $wp_table WHERE post_type = 'wpm-testimonial'") or die(mysql_error()); 
while ($l = mysql_fetch_array($result)) {
    $post_id = $l['ID'];
    echo "Updating: $post_id <br>";
 
    $day = rand($min_days_old, $max_days_old);
    $hour = rand(0, 23);
 
    $new_date = date( 'Y-m-d H:i:s', strtotime("-$day day -$hour hour") );  
    $gmt_new_date = date( 'Y-m-d H:i:s', strtotime("-$day day -$hour hour -$gmt_offset hour") );
 
    mysql_query("UPDATE $wp_table SET post_date='$new_date', post_date_gmt='$gmt_new_date',
    post_modified='$new_date', post_modified_gmt='$gmt_new_date' WHERE ID='$post_id'")
    or die(mysql_error()); 
 
}
 
echo "<hr>DONE!";
 
?>
            </div>
            <!-- #primary -->
            <?php
get_sidebar();


get_footer();


