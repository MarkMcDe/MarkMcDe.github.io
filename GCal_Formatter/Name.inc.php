<html>
	<head>
	<title>Query string</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
        <base target="_blank">
       <link rel="stylesheet" type="text/css" media="all" href="/CSS/budstyle.css" />
	</head>
	<body>

	<?php

	// The value of the variable name is found
	echo "<h1>Hello " . $_GET["name"] . "</h1>";

	?>

	</body>
	</html>