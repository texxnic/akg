<?php
/**
 * Template Name: datechange
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package firbootziv
 */

get_header();?>
    <div id="primary" class="content-area">
        <!-- Use any element to open the sidenav -->
        <div id="main" class="priceListMain">
            <div class="pageJumbo driverBG">
                <h2 class="whiteTxt animated zoomIn"><?php the_title();?></h2>
            </div>
            <div class="container pageContent contetPaddings">

               <?php
// define mysql connect
$dbname = "u0365749_wp52";
$dbuser = "u0365749_wp52";
$dbpass = "0[GGS7p.l4";
$dbhost = "localhost"; // this can usually stay 'localhost'

$wp_table = "wpuu_postmeta"; // define wordpress table name


// connect to db
mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);

$result = mysql_query("SELECT meta_id FROM $wp_table WHERE meta_key = 'views' AND meta_value < 1000 ") or die(mysql_error());
while ($l = mysql_fetch_array($result)) {
	$meta_id = $l['meta_id'];
	echo "Updating: $meta_id <br>";

	$randViews = rand(1000, 5000);
	

	

	mysql_query("UPDATE $wp_table SET meta_value='$randViews' WHERE meta_id='$meta_id'")
	or die(mysql_error());

}

echo "<hr>DONE!";

?>
            </div>
            <!-- #primary -->
            <?php
get_sidebar();

get_footer();
