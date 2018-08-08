<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package planeta40
 */

?>

	
	<footer>
		<div class="container">
			<div class="col-md-6 col-sm-6 footerText"><p>ЦЗКН "ПЛАНЕТА"| 2015</p>
				
						</div>
						<div class="col-md-6 col-sm-6 hidden-xs">
						<div class=" social pull-right"><a href=""><i class="fa fa-vk "></i></a>
													<a href=""><i class="fa fa-skype"></i></a></div>
						</div>
						
		</div>

	</footer>

</div>	

  








	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<!-- Load CSS (remove/comment after release) -->
	<script>
	//Load Libs CSS
	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.css";document.getElementsByTagName("head")[0].appendChild(ms);

	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri(); ?>/fonts.css";document.getElementsByTagName("head")[0].appendChild(ms);

	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap.css";document.getElementsByTagName("head")[0].appendChild(ms);

	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap-theme.css";document.getElementsByTagName("head")[0].appendChild(ms);

	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="<?php echo get_template_directory_uri(); ?>/bower_components/components-font-awesome/css/font-awesome.min.css";document.getElementsByTagName("head")[0].appendChild(ms);


	
	//User Styles
	
	var ms=document.createElement("link");ms.rel="stylesheet";
	ms.href="compiled.min.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>

<!-- Load CSS compiled without Bootstrap & Header styles (after release) -->


<!-- Load Scripts -->
<script>var scr = {"scripts":[
	{"src" : "<?php echo get_template_directory_uri(); ?>/libs/modernizr/modernizr.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri(); ?>/libs/bootstrap/js/bootstrap.min.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/js/dropdown.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri(); ?>/libs/waypoints/waypoints.min.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri(); ?>/libs/animate/animate-css.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri(); ?>/libs/plugins-scroll/plugins-scroll.js", "async" : false},
	{"src" : "<?php echo get_template_directory_uri(); ?>/js/common.js", "async" : false}
	
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>

	
</body>
</html>

<?php wp_footer(); ?>

</body>
</html>
