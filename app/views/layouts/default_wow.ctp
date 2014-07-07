<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
	<meta charset="utf-8">
	<style>
	.js #features {
	margin-left: -12000px; width: 100%;
}
</style>
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	   Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="Marcio Aguiar">

	<!--  Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS : implied media="all" -->
	<?php echo $html->css('/wow_book/css/style.css?v=2'); ?>
	<?php echo $html->css('/wow_book/wow_book.css'); ?>
	<?php echo $html->css('/wow_book/css/preview.css'); ?>
	<?php echo $html->css('nanoscroller'); ?>
	<?php echo $html->css('component_lesson'); ?>

	
	
	

	<!--<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css'>
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<?php echo $javascript->link('modernizr.custom.39460.js'); ?>
	<?php echo $javascript->link('jquery-1.10.1.min.js'); ?>
	<?php echo $javascript->link('jwplayer.js'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";


</script>

</head>
<body>
	<div id="container">
		

	&nbsp;

	<div id="main">
		<img id='click_to_open' src="<?php echo $this->webroot;?>images/click_to_open.png" alt='click to open' />
  		<div id='features'>
			
			<?php e($content_for_layout); ?>

		</div> <!-- features -->

	</div>
	<nav>
		<ul>
			<li><a id='first'     href="#" title='goto first page'   >First page</a></li>
			<li><a id='back'      href="#" title='go back one page'  >Back</a></li>
			<li><a id='next'      href="#" title='go foward one page'>Next</a></li>
			<li><a id='last'      href="#" title='goto last page'    >last page</a></li>
			<li><a id='zoomin'    href="#" title='zoom in'           >Zoom In</a></li>
			<li><a id='zoomout'   href="#" title='zoom out'          >Zoom Out</a></li>
			<li><a id='slideshow' href="#" title='start slideshow'   >Slide Show</a></li>
			<li><a id='flipsound' href="#" title='flip sound on/off' >Flip sound</a></li>
		</ul>
	</nav>
	<footer>

	</footer>
	</div> <!--! end of #container -->
</div>


	<!-- Javascript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
	
	<?php echo $javascript->link('/wow_book/wow_book.min.js'); ?>
	<?php echo $javascript->link('/wow_book/stacktrace-min-0.4.js'); ?>
	
	<?php echo $javascript->link('jquery.nanoscroller.min.js'); ?>
	


	<style>
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".nano").nanoScroller();

			$('#features').wowBook({
				 height : 550
				,width  : 950
				,centeredWhenClosed : true
				,hardcovers : true
				,turnPageDuration : 1000
				,numberedPages : [1,-2]
				,controls : {
						zoomIn    : '#zoomin',
						zoomOut   : '#zoomout',
						next      : '#next',
						back      : '#back',
						first     : '#first',
						last      : '#last',
						slideShow : '#slideshow',
						flipSound : '#flipsound'
					}
			}).css({'display':'none', 'margin':'auto'}).fadeIn(1000);

			$("#cover").click(function(){
				$.wowBook("#features").advance();
			});

		});
	</script>

	<!-- scripts concatenated and minified via ant build script-->
	<?php echo $javascript->link('/wow_book/js/plugins.js'); ?>
	<?php echo $javascript->link('/wow_book/js/script.js'); ?>
	
	
	<!-- end concatenated and minified scripts-->

	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
	<![endif]-->

</body>
</html>
