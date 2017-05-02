<h2 align="left">News Tidbits</h3><br>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 7,
  interval: 30000,
  width: 'auto',
  height: 200,
  theme: {
    shell: {
      background: '#7fc796',
      color: '#171516'
    },
    tweets: {
      background: '#ffffff',
      color: '#131b29',
      links: '#44a31b'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().setUser('HeyMcDermott').start();
</script>

<!-- Facebook Badge START 
<a href="https://www.facebook.com/MarkRMcDermott" target="_TOP" style="font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Mark McDermott">Mark McDermott</a><br/>
<!-- font-family: tahoma,verdana,arial,sans-serif;-->
<a href="https://www.facebook.com/MarkRMcDermott" target="_TOP" title="Mark McDermott">
    <img src="https://badge.facebook.com/badge/788778564.4319.1482611388.png" style="border: 1px;" /></a><br/>
    <a href="http://www.facebook.com/badges/" target="_TOP" style="font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Make your own badge!">Create Your Badge</a><!-- Facebook Badge END -->
-->
<!--(lt)?php

/*$con = mysql_connect("localhost", "test", "test") or die('Sorry, could not connect to database server');

mysql_select_db("recipe", $con) or die('Sorry, could not connect to database');

$query = "SELECT title,article,(LEFT(article,(LOCATE('.', article))+1)) as article2,date from news order by date desc limit 0,5";
$result = mysql_query($query) or die('Sorry, could not get any news at this time ');

if (mysql_num_rows($result) == 0)
{*/
   echo "<h4>Sorry, there is no news posted at this time, please try back later.</h4>";
/*} else
{
   while($row=mysql_fetch_array($result, MYSQL_ASSOC))
   {
       $title = $row['title'];
       $article2 = $row['article2'];
       $date = $row['date'];
       echo "<a href=\"index.php?content=shownews&title=$title\">$title&#133;</a><br>\n";
       echo"$article2<br><i><div align='right'>Posted $date</div></i><br><br>\n";
   }
}*/
?>-->