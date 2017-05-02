<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

/*function rstrip($string, $charlist = "T") {
    // removes everything from first occurence of char in charlist to end of string

    $charlist = str_split($charlist);
    $pos = strlen($string);

    foreach ($charlist as $char) {
        $pos = min(strpos($string, $char), $pos);
    }

    $string_stripped = substr($string, 0, $pos);

    return $string_stripped;
} */
        $format_01 = 'Y-m-d';
        $format_02 = 'H:i:s';
//echo "Hello, World!<br>";

        $GCalstring01 = '2012-11-01T16:00:00-05:00';
$mydate = new DateTime($GCalstring01);
//echo $mydate->format('l, M j g:i a') . "<br>";
//echo &mydate->format('g:i a') . "<br>";
//$GTime=substr($GCalstring01,11,8);
//echo $GTime;
//$Gtime_01=DateTime::createFromFormat($format_02, substr($GCalstring01,11,8));
//echo $Gtime_01->format('g:i a') . "<br>";
/*        echo $GCalstring01 . "<br>";
echo "Format: " . $format . "; ";
        $date_01= (rstrip ($GCalstring01));
        echo "date_01 = $date_01<br>";
        $date = DateTime::createFromFormat($format_01, $date_01);
echo $date->format('l, M j') . "\n";

//        list($year, $month, $day);
//                $datetest01=explode("-", $GCALstring_01)
/*        $date_01= date(rstrip ($string01));
        $date_02= dateTime('Y-m-d', $string01);
        echo "Original date string: " . $string01 . "<br>Truncated date string = " . $date_01 . " - Date_02 = " . $date_02 . "<br>";
//print_r(date_parse_from_format("yyyy-mm-dd", $date_01));
echo "<br><br>";
//        $dayz_01=date_format($time_01, 'EEE, MMM d, ''yy');
//        echo date_format($time_01, 'Y-m-d H:i:s') . "<br>";
        $time_02=strtotime('2012-11-01T15:00:00-05:00');
        echo $time_02;
 * */

        ?>
    </body>
</html>
