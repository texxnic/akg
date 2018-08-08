<?php
/**
* Template Name: newss
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
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.rss.min.js"></script>
  <script>
      jQuery(function($) {
        $("#rss-feeds").rss("https://news.rambler.ru/rss/economics/", {
  layoutTemplate: "<table><tr><th>Title</th></tr>{entries}</table>",
  entryTemplate:  "<a class='darkLink' href='{url}'><h3>{title}</h3></a><p>{bodyPlain}</p><br><hr>",
  limit: 10
})
      })
    </script>
<div id="PageID" class="news"></div>
<div class="pageBack newsBack">
            </div>
            <div class="pageContent">
              
                    <div class="">
                        </div><div class="pageContFirst biegeContentPiece"><div class="container">
                        <h2 id="categoryName">Новости экономики</h2>
                        <br>
                          
                            
                            <div id="rss-feeds"></div></div>
<!--             <div class="col-md-12 aboutDocuments" style="text-align: center;">
                            
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/sved-212x300.jpg" alt="" width="212" height="300" class="alignnone size-medium wp-image-60" /><p>Свидетельство о постановке на учет в ФНС</p></div>
                            
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/doc10-207x300.jpg" alt="" width="207" height="300" class="alignnone size-medium wp-image-56" /><p>Свидетельство участия системы страхования сбережений</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/doc6-212x300.jpg" alt="" width="212" height="300" class="alignnone size-medium wp-image-52" /><p>Свидетельство о постановке на учет в ФНС</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/doc7-212x300.jpg" alt="" width="212" height="300" class="alignnone size-medium wp-image-53" /><p>Свидетельство о постановке на учет в ФНС</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/doc8-212x300.jpg" alt="" width="212" height="300" class="alignnone size-medium wp-image-54" /><p>Свидетельство о постановке на учет в ФНС</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/doc9-212x300.jpg" alt="" width="212" height="300" class="alignnone size-medium wp-image-55" /><p>Свидетельство о постановке на учет в ФНС</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/0doc-211x300.jpg" alt="" width="211" height="300" class="alignnone size-medium wp-image-47" /><p>Свидетельство о постановке на учет в ФНС</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/1doc-213x300.jpg" alt="" width="213" height="300" class="alignnone size-medium wp-image-48" /><p>Свидетельство о постановке на учет в ФНС</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/2doc-212x300.jpg" alt="" width="212" height="300" class="alignnone size-medium wp-image-49" /><p>Свидетельство о постановке на учет в ФНС</p></div>
 
<div class="documentWrapper"><img src="https://sovklad.ru/wp-content/uploads/2017/12/doc4-212x300.jpg" alt="" width="212" height="300" class="alignnone size-medium wp-image-50" /><p>Свидетельство о постановке на учет в ФНС</p></div>
                           
                        </div> -->
                    
                </div>
            </div>
        </div>
    </div>
<?
get_footer();