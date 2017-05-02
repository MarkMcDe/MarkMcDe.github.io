<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
        <base target="_blank">
       <link rel="stylesheet" type="text/css" media="all" href="CSS/budstyle.css" />
<title>Today's Chicago Craft Beer Events</title>
    </head>
    <body>
        
 
        <?php

        //turn on error reporting, remove this in production releases
//        ini_set('display_errors', 'On');
//        error_reporting(E_ALL);
        
       
        $EndDate = date; // ('y-m-d'); //"2016-09-18"; //To cover events ending at 2 the next morning
        $SttDate = date ('y-m-d'); //"2016-09-18";
            
echo "<div>" . $EndDate ('y-m-d') . " , " . $SttDate . "</div>" ;       
        //This inserts the date variables into the Google API request
$response = file_get_contents("https://www.googleapis.com/calendar/v3/calendars/4fnme9rmk20odatisd2jks1pvo%40group.calendar.google.com/events?orderBy=startTime&singleEvents=true&timeMax=" . $EndDate . "T23%3A00%3A00-05%3A00&timeMin=" . $SttDate . "T03%3A00%3A00-05%3A00&key=AIzaSyBoS0tmxAzRjdXkh_G1u5yu1ONua1MEo7s");
//The section below decodes the json response into an associative array. I have managed to work out how to populate the "array within an array" with entries for DATE format or DATETIME format. */

//this function should return the array within one of the results
$decoded_response = json_decode($response, true);
echo "<div class=\"post-content\"><h4><b>Sunday, September 18</b></h4></div><br>";
echo "<div><h3><b>Today is " . $EndDate('l, F j')."</b></h3></div>";

for ($i = 0; $i < count($decoded_response["items"]); $i++)

{
//Line below was a piece of debugging code
//echo "<em>".$i . " … ".count($decoded_response["items"])."…".($decoded_response['items'][$i]['start']['date'])."</em><br>";

    //This handles the two different elements of the 'start' array within the 'items' array where the start and end dates might be stored
    if (isset($decoded_response['items'][$i]['start']['dateTime']))
        {
      $start_GTime = ($decoded_response['items'][$i]['start']['dateTime']);
      $Gdate = new DateTime($start_GTime);
      echo "<strong>" . $Gdate->format('g:i a');
      $end_GTime = ($decoded_response['items'][$i]['end']['dateTime']);
      $Gend = new DateTime($end_GTime);
      if ($Gdate<$Gend){
      echo " - " . $Gend->format('g:i a');}
      echo " &diams; </strong>";
        }

    if (isset($decoded_response['items'][$i]['start']['date'])) 
    {
    $start_day = ($decoded_response['items'][$i]['start']['date']);
    $Gdate= new DateTime($start_day);
    //echo "<h3><b>" . $Gdate->format('l, F j')."</b></h3><p></p>";
    }
    //prints out the rest of the event information
    echo "<strong>" . $decoded_response["items"][$i]["summary"] . "</strong><br/>";
    echo $decoded_response["items"][$i]["location"] . "<br/>";
echo nl2br($decoded_response["items"][$i]["description"]) . "<br/></p><p>";

} 
//    echo "<br/><hr></div>";

    ?>
    </body>
</html>