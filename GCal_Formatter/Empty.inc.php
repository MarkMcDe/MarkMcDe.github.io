<?php include_once("analyticstracking.php") ?>
<iframe src="https://www.google.com/calendar/embed?showPrint=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=400&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=4fnme9rmk20odatisd2jks1pvo%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FChicago" style=" border-width:0 " width="600" height="400" frameborder="0" scrolling="no"></iframe><br></span>

<span class='portbody'>This app was a class project I wrote to meet a specific need. I am maintaining a Google Calendar of Chicago area craft beer events for publication as a list of highlighted events on my blogs.</span>
<span class='portbody'>The problem was that the Google calendar had no easy way to select just the elements I needed from each calendar date array. My previous solution was to print a date range of event from Agenda view to a PDF, the copy the text into an editor, and kill a lot of lines.</span>
<span class='portbody'>Taking what I have learned about APIs, I was able to use the form above that will query my Calendar for events within a certain date range, sort them chronologically, and show just the elements I wanted so I could easily copy and paste into a blog editing window.</span>
<h4>A few notes on the building of the app:</h4>
<ul class='.portbody'><li>GCal handles the dates for events set to &ldquo;All Day&rdquo; differently than for those with Start and End times, storing the time in different elements of the event&rsquo;s array. I used a couple of &ldquo;if&rdquo; statements to work it out.</li>
<li>Since you need both a Start and End time, while I have many events for which a Start Time is given &mdash; presuming it ends when they close &mdash; I have set both the Start and End times for such events to be the same. Again, I used &ldquo;If&rdquo; statements to print the End Time &mdash; and the dash between &mdash; only if it&rsquo;s different from the Start Time.</li>
<li>This form items above are set to input data in a DATE format instead of TEXT. In Chrome and Opera, for now, this causes the form to include a drop down calendar.</li></ul>
<h4>Revisions:</h4>
<ul><li><strong>Dec. 9, '12: </strong>Fixed a search error that did not return events for the last day of the search range if they had a Start Time and it was after "00:00".</li></ul>
<ul><li><strong>May 4, '13: </strong>Finally took an hour or three to figure how to put a default of "today" in the Start Date box. The default End Date is four days from today. You may change the search dates as you like.</li></ul>

<h4>Future improvements and wish list:</h4>
<ul><li>Of course, this needs to be able to verify the dates input to assure they are in readable date format, etc.</li>
<li>I&rsquo;d like to further tidy the output by printing the date only before the first item for it. And to show only the second &ldquo;pm&rdquo; if both the Start and End time are after noon. Well, that will come with time. In the meantime, this puppy is functional and being used.</li></ul>
<span class='portbody'>If you&rsquo;d like me to adapt this for your own use, let me know. You basically need your Google Calendar's ID, and the Authorization code string from Google.</span>
<span class='portbody'>Check out the published results on my <a href="http://www.chicagonow.com/the-beeronaut/category/beer-calendar/" target="_blank">Beeronaut Blog</a> (Look for calendar articles)</span>


