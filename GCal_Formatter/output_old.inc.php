<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>

<title>Your Beeronaut Events</title>
    </head>
    <body>
        
 
        <?php

        //turn on error reporting, remove this in production releases
//        ini_set('display_errors', 'On');
//        error_reporting(E_ALL);
        
       
        $EndDate = ($_POST['EnDate']);
        $SttDate = ($_POST['StDate']);
            
if ($EndDate<$SttDate)
{echo "<h3>End Date needs to be the same as or later than the Start Date. Please use 'yyyy-mm-dd' format.";
}
        
        //This inserts the date variables into the Google API request
$response = file_get_contents("https://www.googleapis.com/calendar/v3/calendars/4fnme9rmk20odatisd2jks1pvo%40group.calendar.google.com/events?orderBy=startTime&singleEvents=true&timeMax=" . $EndDate . "T23%3A59%3A00-06%3A00&timeMin=" . $SttDate . "T03%3A00%3A00-06%3A00&fields=items(description%2Cend%2Clocation%2Cstart%2Csummary)&key=AIzaSyBoS0tmxAzRjdXkh_G1u5yu1ONua1MEo7s");

//The section below decodes the json response into an associative array. I have managed to work out how to populate the "array within an array" with entires for DATE format or DATETIME format. */

//this function should return the array within one of the results
$decoded_response = json_decode($response, true);

for ($i = 0; $i < count($decoded_response["items"]); $i++)

{
//Line below was a piece of debugging code
//echo "<em>".$i . " … ".count($decoded_response["items"])."…".($decoded_response['items'][$i]['start']['date'])."</em><br>";

    //This handles the two different elements of the 'start' array within the 'items' array where the start and end dates might be stored
    if (isset($decoded_response['items'][$i]['start']['dateTime']))
        {
      $start_GTime = ($decoded_response['items'][$i]['start']['dateTime']);
      $Gdate = new DateTime($start_GTime);
      echo "<h3>" . $Gdate->format('l, M. j')."</h3>";
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
    echo "<h3>" . $Gdate->format('l, M. j')."</h3>";
    }
    //prints out the rest of the event information
    echo "<strong>" . $decoded_response["items"][$i]["summary"] . "</strong><br/>";
    echo $decoded_response["items"][$i]["location"] . "<br/>";
echo nl2br($decoded_response["items"][$i]["description"]) . "<br/><br/>";

} 
    echo "<br/><hr>";

    ?>
    </body>
</html>