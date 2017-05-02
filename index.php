<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:700italic,700,400italic,400|PT+Sans+Narrow:400,700|PT+Serif:400,700italic,400italic,700|Wellfleet' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="CSS/mystyle.css" />
<link rel="stylesheet" type="text/css" href="CSS/style.css" />
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print" />
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
<link rel="stylesheet" type="text/css" href="CSS/MyCSSMenuStyles.css" />
<!--<link rel="stylesheet" type="text/css" href="CSS/menu_assets/menu_styles.css" />-->
<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" href="highslide/highslide-ie6.css" />
<![endif]--> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Mark McDermott.com</title>
<!--Highslide begins here-->
<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
--> 
 
<script type="text/javascript" src="highslide/highslide-full.js"></script> 


<!--
    2) Optionally override the settings defined at the top
    of the highslide.js file. The parameter hs.graphicsDir is important!
    Add the slideshow and do some adaptations to this example.
--> 
 
<script type="text/javascript"> 
//<![CDATA[
hs.graphicsDir = 'highslide/graphics/';
hs.transitions = ['expand', 'crossfade'];
hs.restoreCursor = null;
hs.lang.restoreTitle = 'Click for next image';
 
// Add the slideshow providing the controlbar and the thumbstrip
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: true,
	useControls: true,
	overlayOptions: {
		position: 'bottom right',
		offsetY: 50
	},
	thumbstrip: {
		position: 'above',
		mode: 'horizontal',
		relativeTo: 'expander'
	}
});
 
// Options for the in-page items
var inPageOptions = {
	//slideshowGroup: 'group1',
	outlineType: null,
	allowSizeReduction: false,
	wrapperClassName: 'in-page controls-in-heading',
	thumbnailId: 'gallery-area',
	useBox: true,
	width: 600,
	height: 400,
	targetX: 'gallery-area 10px',
	targetY: 'gallery-area 10px',
	captionEval: 'this.a.title',
	numberPosition: 'caption'
}
 
// Open the first thumb on page load
hs.addEventListener(window, 'load', function() {
	document.getElementById('thumb1').onclick();
});
 
// Cancel the default action for image click and do next instead
hs.Expander.prototype.onImageClick = function() {
	if (/in-page/.test(this.wrapper.className))	return hs.next();
}
 
// Under no circumstances should the static popup be closed
hs.Expander.prototype.onBeforeClose = function() {
	if (/in-page/.test(this.wrapper.className))	return false;
}
// ... nor dragged
hs.Expander.prototype.onDrag = function() {
	if (/in-page/.test(this.wrapper.className))	return false;
}
 
// Keep the position after window resize
hs.addEventListener(window, 'resize', function() {
	var i, exp;
	hs.getPageSize();
 
	for (i = 0; i < hs.expanders.length; i++) {
		exp = hs.expanders[i];
		if (exp) {
			var x = exp.x,
				y = exp.y;
 
			// get new thumb positions
			exp.tpos = hs.getPosition(exp.el);
			x.calcThumb();
			y.calcThumb();
 
			// calculate new popup position
		 	x.pos = x.tpos - x.cb + x.tb;
			x.scroll = hs.page.scrollLeft;
			x.clientSize = hs.page.width;
			y.pos = y.tpos - y.cb + y.tb;
			y.scroll = hs.page.scrollTop;
			y.clientSize = hs.page.height;
			exp.justify(x, true);
			exp.justify(y, true);
 
			// set new left and top to wrapper and outline
			exp.moveTo(x.pos, y.pos);
		}
	}
});
//]]>
</script> 
 
<!--
	3) Modify some of the styles
--> 
<style type="text/css"> 
	.highslide-image {
		border: 1px solid black;
	}
	.highslide-controls {
		width: 90px !important;
	}
	.highslide-controls .highslide-close {
		display: none;
	}
	.highslide-caption {
		padding: .5em 0;
	}
</style> 
<!--Highslide ends here-->

<!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.6.1.min.js"></script>

</head>

<body>

<div id="header">
	<?php include("header.inc.php"); ?>
</div>

<div id="content">
<div id="nav">
	<?php include("nav.inc.php"); ?>
</div>
<div id="main">
<?php
	if (!isset($_REQUEST['content']))
		include("main.inc.php");
		else
			{
			$content = $_REQUEST['content'];
			$nextpage = $content . ".inc.php";
	include($nextpage);
			} ?>
</div>
<div id="news">
	  <?php include("news.inc.php"); ?>
</div>
</div>  
<div id="footer">
	  <?php include("footer.inc.php"); ?>
</div>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.0.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->
  <!-- Change UA-XXXXX-X to be your site's ID -->
    <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

  <script type="text/javascript">
      $(document).ready(function() {
   $('#booklist').find('dd').hide().end().find('dt').click(function() {
     $(this).next().slideToggle();
   });
 });
  </script>
<!--These are the scripts to do the dropdown buttons, can they only be invoke once? below is a "Booklist2" script -->
  <script type="text/javascript">
      $(document).ready(function() {
   $('#booklist2').find('dd').hide().end().find('dt').click(function() {
     $(this).next().slideToggle();
   });
 });
  </script>


</body>
</html>