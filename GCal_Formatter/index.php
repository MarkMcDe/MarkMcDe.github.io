<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:700italic,700,400italic,400|PT+Sans+Narrow:400,700|PT+Serif:400,700italic,400italic,700|Wellfleet' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="CSS/mystyle.css" />
<link rel="stylesheet" type="text/css" href="CSS/style.css" />
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Beeronaut Google Calendar Formatter & Printer</title>


<!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="JS/lib/modernizr-custom.js"></script>

</head>

<body>

<div id="header">
	<?php include("header.inc.php"); ?>
</div>

<div id="content">
<div id="output">
<?php
	if (isset($_REQUEST['content']))
		include("output.inc.php");
		else
                include ("Empty.inc.php");
?>
</div>
</div>  
<div id="footer">
	  <?php include("footer.inc.php"); ?>
</div>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--  <script>window.jQuery || document.write('<script src="JS/lib/jquery-2.2.4.min.js"><\/script>')--></script>



</body>
</html>