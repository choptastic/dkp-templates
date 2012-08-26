 
/* This is the body, pretty straightforward */
body
{
	font-family: Arial,sans-serif;
	font-size: 9pt;
	background-color: #070707;
	color: #eeeeee;
}

/* used when [quote] tags are used in posts */
.quote{
	font-size:7.5pt;
	background-color:;}

.quoteheader {
	font-size:9pt;
	background:;}

/* Most tables use this type    */
.List{	background-color: #070707;
	border: inset;
	border-width: 1px;}


/* used for the newsletter table */
table.newsletter{
		border: inset;
		border-width: 1px;
		font-family:monospace;
		font-size: 9pt;}

/* Used in the default base as the Title table.  Even with custom layouts, it's used in the Add/Edit Post and other popups that have a title */
Table.Subject{
		border: outset;
		border-width: 1px;}

/* used to define the Menus */	
.Menu{		width: 185px;
		border: outset;
		font-weight: bold;
		border-width: 1px;}

/* This is used with [title] tags in guides and posts */
.GuideTitle{	font-weight:bold;
		font-size: 14pt;
		color: white;}

		
/* used with [subtitle] tags in guides and posts */
.GuideSubTitle{	font-weight:bold;
		font-size: 11pt;
		color:white;}

/* The Row of the "Title Table" */
.Subject{	font-size: 11pt;
		font-weight: bold;
		background: #070707;
		color: #ffffff}
		
/* This is the "PAge Description" row of the "Title Table" */
.SubSubject{	font-size: 9pt;
		font-weight: bold;
		background: #070707;
		color: #ffffff;}

/* in the default layout, this is the style associated with the Count Down: "x minutes until the next raid" */
.CountDown{	font-size: 16pt;
		font-weight: normal;}
		
/* In the default, is the style of the Next Event Name at the top */
.EventName{	font-size:11pt;
		font-weight:bold; }

/* same as above, only for the Date/Time */
.EventTime{	font-size:11pt;
		font-weight:normal; }
		
/* for the TopStats, is the color of the Statistic itself */
.StatCount{	color: #ffffff;}

/* for the TopStats, is the color of a Statistic designed to get the user's attention */
.StatAlert{	color: #5fff1f;}

/* In the default layout, is the style of the "Top Stats" */
.TopStats{	background: #070707;
		font-size: 7.5pt}

/* In the Default Layout, Is essentially the background information for the Next Event. */
.Event{		background: #070707;
		font-size:9pt;}
		
/* Error box description */
table.error{	border-width: 1px;
		border-style:outset;}

/* Error box description */
td.error,.missing,div.error{	
		font-size: 9pt;
		background: #771111;
		color: #FFFFFF;}

/* Error box title */
.errorlistlabel{background:#BB1111;
		font-weight:bold;
		color:#FFFFFF;
		font-size:11pt}

/* used on almost every page, is the style of one of the row-types in a table with alternating row types */
.list1,.l1{	font-size: 9pt;
		background: #070707;}

/* used on almost every page, is the style of the other of the row-types in a table with alternating row types */
.list2,.l2{	font-size: 9pt;
		background: #171717;}

/* used commonly, is for rows that want to "Get Your attention" in a table.  IE, Missing Raids on your member profile. */
.listred,.lr{	background: #FF9999;
		color: #000000;
		font-size: 9pt;}

/* used to mark a "new or recently posted" thread. */
.newlist1,.newl1{
		background: #262626;
		font-weight:bold;
		font-size: 9pt;}

.newlist2,.newl2{
		background: #262626;
		font-weight:bold;
		font-size: 9pt;}

/* used in the copyright notice */
.copyright{font-size: 7.5pt;font-style:italic}

/* used in a few places to just define a normal place to put simple kinda-small text */
.plain{font-size:9pt}

/* to define small text in random places */
.xsmall{font-size:7.5pt}

/* today on the calendar */
.calcurrent{
	font-size: 7.5pt;
	color: #7fff1f;
	border-style:solid;
	border-width:1px;
	border-color:grey;
}

/* Any day on the calendar.  Primarily for defining the width of the calendar, as the calendar width SHOULD be (width of .calday) * 7  */
.calday{
	width:20px}


/* The menu header (Menu, Resources, etc) as well as the Calendar Header, and the current date on the calendar */
.MenuCat,.calheader{
		font-size: 9pt;
		font-weight: bold;
		background: #222222;
		color: #5fdf3f;
		
		}

/* The cell record on the calendar for if there is something scheduled this day */
.calsomething{}

/* The header bar of tables that act as lists */
.listlabel{
		font-size: 9pt;
		font-weight: bold;
		background: #070707;
		color: #7fff1f;}

/* The Menu option contents, as well as the body for the calendar */
.MenuChoice,.calbody{	font-size: 9pt;
		background: #070707;
		color: #7fff1f;}

/* This is the Shoutbox style */
.shoutbox{
	overflow:auto;
	height: 200px;
	font-weight:normal;
	font-size: 7.5pt;
}

/* This is the style for the Vent/TS status */
.ventstatus{
	width:100%;
	height:300px;
	overflow:auto;
}

/* is the information about the poster on the forum.  The left-most pane on each post */
.PostInfo{	font-size: 9pt;
		background: #070707;
		padding:5px;
		border-style:solid;
		border-width:1px;
		border-color: #eeeeee;

}
		
/* While rather rarely used, this is the "color picker" popup. Probably shouldn't ever change */
.cp{		width:10;height:10}

/*  On the forum, this is the little blurb at the top that gives statistic info "Total Posts" "Total Threads" "Deepest Thread" */
.ThreadHeader{	font-size: 11pt;}
	
/* The style associated with the "Add a Post to this thread" link on the forum */
.MakeAPost{	font-weight: bold;
		font-size: 11pt;}

/* The style associated with the pane in the layout containing the body of each post */
.PostText{	font-size: 9pt;
		background: #070707;
		padding:10px;
		border-style:solid;
		border-width:1px;
		border-color: #eeeeee;
		}

/* used on the [pre] tags in posts and stuff */
pre{		font-size:11pt;}


/* Basic Link Definition */
A:visited	{color: #ffff1f;}
A:link		{color: #ffff1f;}
A:active	{color: #3fdf3f;}
A:hover		{color: #3fdf3f;}

/* for any list rows that must show up to get the user's attention, this is the link for them */
A.inred:visited	{color:#000000;}
A.inred:link	{color:#000000;}
A.inred:active	{color:#444444;}
A.inred:hover	{color:#444444;}

/* used in on most pages as the buttom class */
input.button{	background: #000000;
		color: #00ff00;}

/* used in the default layout as any list items */
li{	
		list-style-type:filledcircle;
}

/* The following are the rules for tabs */
div.tabrow{float:left;width:100%;padding-top:5px;}
ul.tabrow, ul.tabrow li{list-style-type:none;margin:0;padding:0}
ul.tabrow{margin-left:10px;}
ul.tabrow li{list-style-image:none;float:left;margin-right: 3px;text-align:center;font-size:inherit}
ul.tabrow a{float:left;width:8em;padding: 5px 0;background-color:#171717}
ul.tabrow a:hover {background-color:#262626;}
ul.tabrow li.selected a,ul.tabrow li.selected a:hover {background-color:#070707}


/* The next rules (all preceded with bigcal) are for the "Big Calendar" (bigcalendar.php) */

/* this is the table that displays the calendar info */
.bigcal {width:100%;border-style:inset;border-width:1px;}

/* This is the header of the calendar, displaying the month and year, and the links to the next months */
.bigcalheader{font-size:16pt;font-weight:bold;background: #070707;color:#7fff1f}

/* Day Labels "Sunday" "Monday" etc */
.bigcaldayheader{font-size:10pt;font-weight:bold;background: #070707;color:#7fff1f}

/* This is the class for each day */
.bigcalday {width:14%;border-style:solid;border-width:1px;height:100px;background: #070707;border-color:#ffff1f}

/* This is a class that is displayed on event labels (8:00pm - Gruul's Lair) */
.bigcallabel{font-size:8pt;cursor:pointer}

/* This is the div containing the day of the month */
.bigcaldaylabel{font-size:8pt;background:#171717;text-align:center}

/* The class when a day on the calendar is being hovered over */
.bigcalday_hover{background:#262626;border-color:#3fdf3f}

/* One of the classes displayed on today */
.bigcalcurrent{border-color:#000000;background:#262626}

/* One of the classes to display is something is scheduled on that day */
.bigcalsomething{}

/* This is going to be the Arrows to the right and left */
.bigcalheader a{color:#ffff1f}

/* This is the div that gets clicked to add a new item.  The default image is a plus.  The Overflow:hidden is because IE, for whatever reason, wants to make it higher than the height attribute */
.bigcalplus{	position:relative;
		top:2px;
		float:right;
		width:10px;
		height:10px;
		overflow:hidden;
		line-height:1px;
		background-image:url(plus.gif);
		cursor:pointer;}		

/* A day that's not in the current month (at the beginning and end of the calendar display) */
.bigcalblank {background: #171717}
