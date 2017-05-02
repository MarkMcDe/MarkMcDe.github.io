<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>

<title>Beeronaut Printable Google Calendar</title>
    </head>
    <body>
<h1>The Beeronaut's Google Calendar Formatter App</h1>
        <h2>Please enter the dates you want to show events for:</h2>
<form action="index.php?content=output.inc" method="post">
<span style='#nav'>Start Date: <input type="date" id="date1" name="StDate" value=<?php echo date('Y-m-d'); ?>></span>
<span style='#nav'>End Date: <input type="date" id="date2" name="EnDate" value=<?php echo date('Y-m-d', strtotime("+3 day")); ?>></span>
<p>Format is "yyyy-mm-dd." Today and the three days after are filled by default.<p><input type="submit" /></p>
</form>

    </body>
</html>