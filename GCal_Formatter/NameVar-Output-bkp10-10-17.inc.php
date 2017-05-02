<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.4/jquery-ui.min.js"></script>
        <base target="_blank">
       <link rel="stylesheet" type="text/css" media="all" href="/GCal_Formatter/CSS/budstyle.css" />
<title>Beeronaut Chicago Craft Beer Events</title>
    </head>
    <body>
 
        <?php
//enter url in format: http://markmcdermott.com/GCal_Formatter/NameVar-Output.inc.php?dote=2016-12-24

        //turn on error reporting, remove this in production releases
        ini_set('display_errors', 'On');
        error_reporting(E_ALL);


//    if (isset($_GET['dote']) {
        $dite = $_GET['dote'];
//        echo ("Dite = "); var_dump($dite);
//    }
               
        $EndDate = (string)$dite; //To cover events ending at 2 the next morning
        $SttDate = (string)$dite;
            
//echo("<p>" . $SttDate ."   " . $EndDate . "<br>Okay</p>");


//if ($EndDate<$SttDate)
//{echo "<h3>End Date needs to be the same as or later than the Start Date. Please use 'yyyy-mm-dd' format.";
//}
        
        //This inserts the date variables into the Google API request
$getaresponse = 'https://www.googleapis.com/calendar/v3/calendars/4fnme9rmk20odatisd2jks1pvo%40group.calendar.google.com/events?orderBy=startTime&singleEvents=true&timeMax=' . (string)$EndDate . 'T23%3A00%3A00-06%3A00&timeMin=' . (string)$SttDate . 'T03%3A00%3A00-06%3A00&key=AIzaSyBoS0tmxAzRjdXkh_G1u5yu1ONua1MEo7s';

//'T03%3A00%3A00-06%3A00" is the key for UTC time -6 hrs and needs to be adjusted for DST. Can we make it automatic.
//echo ('https://www.googleapis.com/calendar/v3/calendars/4fnme9rmk20odatisd2jks1pvo%40group.calendar.google.com/events?orderBy=startTime&singleEvents=true&timeMax=' . (string)$EndDate . 'T23%3A00%3A00-05%3A00&timeMin=' . (string)$SttDate . 'T03%3A00%3A00-05%3A00&key=AIzaSyBoS0tmxAzRjdXkh_G1u5yu1ONua1MEo7s');

//echo ("<p>Getaresponse = ". $getaresponse . "</p>");

$response = file_get_contents($getaresponse);

//echo ("<p>Response = " . $response . "</p>");

//The section below decodes the json response into an associative array. I have managed to work out how to populate the "array within an array" with entries for DATE format or DATETIME format. 


//this function should return the array within one of the results
$decoded_response = json_decode($response, true);
//echo ("<div class=\"post-content\"><h4><b>" . date("F j, Y", strtotime($SttDate)) . "</b></h4></div><br>");
//test to strip tags from address
for ($i = 0; $i < count($decoded_response["items"]); $i++)
//$stripcity = strip_tags($decoded_response['items'][$i]['location']);
//echo ("<p><p>Location: " . $stripcity);
//echo ("<p><p>");
//echo ("<hr>");

{
//Line below was a piece of debugging code
//echo "<em>".$i . " … ".count($decoded_response["items"])."…".($decoded_response['items'][$i]['start']['date'])."</em><br>";

    //This handles the two different elements of the 'start' array within the 'items' array where the start and end dates might be stored
    if (isset($decoded_response['items'][$i]['start']['dateTime']))
        {
      $start_GTime = ($decoded_response['items'][$i]['start']['dateTime']);
      $Gdate = new DateTime($start_GTime);
      //echo "<h3><b>" . $Gdate->format('l, F j')."</b></h3>";
      $end_GTime = ($decoded_response['items'][$i]['end']['dateTime']);
       $Gend = new DateTime($end_GTime);
    echo "<strong>" . $Gdate->format('g:i') . " ";
	$Ampm2 = ($Gend->format('a'));
	$Ampm1 = ($Gdate->format('a'));
	if($Ampm1<>$Ampm2){
	echo " " . $Ampm1;}
      if ($Gdate<$Gend){
      echo " - " . $Gend->format('g:i a') . " ";} else {
      echo " " . $Ampm1 . " ";}

//Inserts beer mug emoji
      echo json_decode('"\uD83C\uDF7A"');
        }

    if (isset($decoded_response['items'][$i]['start']['date'])) 
    {
    $start_day = ($decoded_response['items'][$i]['start']['date']);
    $Gdate= new DateTime($start_day);
    //echo "<h3><b>" . $Gdate->format('l, F j')."</b></h3><p></p>";
    }
    //prints out the rest of the event information
    echo " <strong>" . $decoded_response["items"][$i]["summary"] . "</strong></strong><br/>";

echo $decoded_response["items"][$i]["location"] . " ";

// stripcity test
    $stripcity = urlencode(strip_tags($decoded_response['items'][$i]['location']));
    $shortcode=stripos($stripcity,"%26%238209");
    $stripcity=substr($stripcity,0,$shortcode-4);
    $shortcode=strripos($stripcity,"%28");
if ($shortcode > 0) $stripcity=substr($stripcity,0,$shortcode-1);
    echo ("<a target='_blank' href='https://maps.google.com?q=" . $stripcity . "' style='text-decoration:none;'>");
    echo json_decode('"\uD83C\uDF0E"');
    echo ("</a><br/>");
//    echo " <a href='https://www.google.com/maps/place/" . $stripcity . ">json_decode('"\uD83C\uDF7A"')</a><br/>";
//end stripcity

echo nl2br($decoded_response["items"][$i]["description"]) . "</a></strong></em><br/></p><p>";

} 
//    echo "<br/><hr></div>";
//*/
    ?>
    </body>
</html>