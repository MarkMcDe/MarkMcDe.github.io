<h2 align="center">My Front Page</h2><br>

<h3>Welcome to my site!</h3>
<p>This is a sort of temporary refuge as I have had to migrate to a new host. My web presence is also migrating to the age of PHP, CSS and HTML5. You will see some of those links on the navigation bar at left don't yet go anywhere. But please be patient, as I am consolidating a lot of projects from Web Design classes over the past year. Soon, a lot of this content will be served from a MySQL database. But for now, I'm just posting a few pictures of mine on this front page.</p>

<!--//*Highslide text follows//
	4)	Div where the gallery appears-->
 
<div id="gallery-area" style="width: 620px; height: 520px; margin: 0 auto; border: 1px solid silver" z-index: 1;> 
 
<!--
5)	Put all the thumbnails inside a hidden div where Highslide can index them to create the slideshow.
-->
 
<div class="hidden-container"> 
<!--6) This is how you mark up the thumbnail images with an anchor tag around it. The anchor's href attribute defines the URL of the full-size image. Given the captionEval option is set to "this.a.title", the caption is grabbed from the title attribute of the anchor.
-->

<a id="thumb1" class="highslide" href='images/thumbstrip11.jpg'
onclick="return hs.expand(this, inPageOptions)" title="Entrance to Arnold's Park in Iowa's Great Lakes"> 
<img src='images/thumbstrip11.thumb.png' alt=''/></a> 

<a class="highslide" href="images/thumbstrip12.jpg" onclick="return hs.expand(this, inPageOptions)" title="Inner Space Cavern, Austin TX, 1999"> <img src="images/thumbstrip12.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip13.jpg" onclick="return hs.expand(this, inPageOptions)" title="New Orleans ghost sign, 2003"> <img src="images/thumbstrip13.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip14.jpg" onclick="return hs.expand(this, inPageOptions)" title="Fishing tournament, Stewartsville, NJ, 2004"> <img src="images/thumbstrip14.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip15.jpg" onclick="return hs.expand(this, inPageOptions)" title="200 year-old fire station, St. Petersburg, Russia, 2004"> <img src="images/thumbstrip15.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip16.jpg" onclick="return hs.expand(this, inPageOptions)" title="Cloud Gate, Chicago's Millennium Park, 2006"> <img src="images/thumbstrip16.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip17.jpg" onclick="return hs.expand(this, inPageOptions)" title="Dueling animated billboards, Sioux City, 1979"> <img src="images/thumbstrip17.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip18.jpg" onclick="return hs.expand(this, inPageOptions)" title="The Town & Country Motel, old Roadside Americana on Highway 36 in eastern Illinois."> <img src="images/thumbstrip18.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip19.jpg" onclick="return hs.expand(this, inPageOptions)" title="Praying Mantis, Lyman Woods, Downers Grove, IL, 2011"> <img src="images/thumbstrip19.thumb.png" alt=""/></a>

<a class='highslide' href="images/thumbstrip20.jpg" onclick="return hs.expand(this, inPageOptions)" title="Heirloom carrots from our garden, 2011"> <img src="images/thumbstrip20.thumb.png" alt=""/></a>";
 
<a class="highslide" href="images/thumbstrip21.jpg" onclick="return hs.expand(this, inPageOptions)" title="Peacock at Brookfield Zoo, 2012"> <img src="images/thumbstrip21.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip22.jpg" onclick="return hs.expand(this, inPageOptions)" title="Beirgarten of Millstream Brewing Co., Amana, IA, 2012"> <img src="images/thumbstrip22.thumb.png" alt=""/></a>

<a class="highslide" href="images/thumbstrip23.jpg" 
   onclick="return hs.expand(this, inPageOptions)" title="View of Marina City from the IBM Tower's window, 2011."> 
    <img src="images/thumbstrip23.thumb.png" alt=""/></a>

<!--<a class="highslide" href="images/thumbstrip24.jpg" 
   onclick="return hs.expand(this, inPageOptions)" title="Fjord landscape"> 
    <img src="images/thumbstrip24.thumb.png" alt=""/></a>-->

</div>

</div>

<!--//Highslide text ends//-->
<!--;lt?php
// $con = mysql_connect("localhost", "test", "test") or die("Sorry, could not connect to database server");

// mysql_select_db("recipe", $con) or die("Sorry, could not connect to database");

// $query = "SELECT count(recipeid) from recipes";
// $result = mysql_query($query);
// $row=mysql_fetch_array($result);
// if ($row[0] == 0)

/*{
   echo "No recipes posted yet.&nbsp;&nbsp;\n";
   echo "<a href=\"index.php?content=newrecipe\">Add a recipe</a>\n";
   echo "<hr>\n";
} else
{
 $totrecords = $row[0];
   echo "$totrecords recipes posted\n";
   echo "<a href=\"index.php?content=newrecipe\">Add a recipe</a>\n";
   echo "<hr>\n";
   }

 
//pagination section:
  if (!isset($_GET["page"]))
      $thispage = 1;
   else
      $thispage = $_GET["page"];

   $recordsperpage = 5;
   $offset = ($thispage - 1) * $recordsperpage;
$totpages = ceil($totrecords / $recordsperpage);

$query = "SELECT recipeid,title,poster,shortdesc from recipes order by recipeid desc limit $offset,$recordsperpage";
   $result = mysql_query($query) or die("Could not retrieve comments: " . mysql_error());
   while($row = mysql_fetch_array($result, MYSQL_ASSOC))
   {
      $recipeid = $row["recipeid"];
      $title = $row["title"];
      $poster = $row["poster"];
      $shortdesc = $row["shortdesc"];
      echo "&#35; $recipeid&#58; <a href=\"index.php?content=showrecipe&id=$recipeid\">$title</a> submitted by $poster<br>\n";
      echo"$shortdesc<br><br>\n";
  }

 if ($thispage > 1) 
   {$page = $thispage - 1;
   $prevpage = "<a href=\"index.php?content=showrecipe&id=$recipeid&page\">Prev</a>";
   } else
   {$prevpage = "";
   }
   $bar="";
   if ($totpages>1)
   {
   for($page = 1; $page <= $totpages; $page++)
   {
   if ($page == $thispage)
   {
   $bar .= " $page ";
   } else
   {
   $bar .= " <a href=\"index.php?content=main&id=$recipeid&page=$page\">$page</a> ";
    }
   }
   }
  if ($thispage < $totpages)
  {
       $page = $thispage + 1;
$nextpage = " <a href=\"index.php?content=main&id=$recipeid&page=$page\">Next</a>";
  } else
  {
  $nextpage="";
  }
   echo "Go To: " . $prevpage . $bar . $nextpage;
//alternate pagination
echo "<br><br>Displaying page $thispage of $totpages<br><br>";

   echo "<form action=\"index.php\" method=\"get\">";

   echo "<input type=\"hidden\" name=\"content\" value=\"main\">";

   echo "<input type=\"hidden\" name=\"id\" value=$recipeid>";

   echo "Jump to Page:&nbsp;<input type=\"text\" size=\"2\" name=\"page\" min=\"1\" max=\"2\" placeholder=$thispage>";

   echo "<input type=\"submit\" value=\"Go-Go-Go!\">";
*/
?>-->