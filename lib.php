<?php
	function html_header()
	{
?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
			"http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8;">
			<title>Valar Morghulis: NC Planetside 2</title>
			<link rel="stylesheet" type="text/css" href="./css/1.css"> 
			<link rel="shortcut icon" href="./media/favicon.ico">
		</head>
		<body>
		<div class="frame"id="frame-shell">
	
		
<?php
	}
	function welcomeMessage()
	{
		echo"<div id=welcome-msgbox> Valar Morghulis<br>";
		echo"It is written<br>";
		echo"That each man owes the red god a life<br>";
		echo"Ours, or the enemy<br>";
		echo"We pay our debts<br>";
		echo" It is written<br>";
		echo "All men must die<br> </div>";
	}
	function getMainPage()
	{
		echo"<div id=shell-main>";
			echo"<div id=shell-top>";
				getBanner();
				getTopStats();
			echo"</div>";
			echo"<div id=shell-blank></div>";
			echo"<div id=shell-content>";
				getNavigation();
				getMiddleContent();
				getUsersOnline();
				getNewestUser();
			echo"</div>";
			echo"<div id=shell-blank></div>";

			echo"<div id=shell-bottom>";
				getFooter();
			echo"</div>";
			echo"<div id=shell-blank></div>";
		echo"</div>";
	}
	function getBanner()
	{
		echo"<div id=shell-banner>";
		
		
		echo"</div>";
	}
	function getTopStats()
	{
		echo"<div id=shell-topstats>";
			echo"<div id=shell-topstats-left>";
				echo"Member: 65 <br>";
				echo"Online: 5 <br>";
				echo"KIA: 1337 <br>";
			echo"</div>";
			echo"<div id=shell-topstats-middle>";
				echo"USE Emerlad: Online<br>";
				echo"Today is June 29th<br>";
				echo"The time is 10:01pm<br>";
			echo"</div>";
			echo"<div id=shell-topstats-middle>";
			echo"</div>";
			echo"<div id=shell-topstats-middle>";
				echo"Hits All: 65 <br>";
				echo"Hits Unqiue: 5 <br>";
				echo"Hits Today: 1337 <br>";
			echo"</div>";
			echo"<div id=shell-topstats-right>";
				echo"Rambus<br>";
				echo"Configure<br>";
				echo"Logout<br>";
			echo"</div>";
		
		echo"</div>";
	}
	function getMiddleContent()
	{
		echo"<div id=shell-middle>";
				getFrontPagePost();
		echo"</div>";
	}
	function getNavigation()
	{
		echo"<div id=shell-nav>";
		?>
		<div id="navigation">
		<htmltag style='font-size:18px'>Navigation</htmltag>
			<ul class="top-level">
				<li><a href="./hq.php">Main</a>
					<ul class="sub-level">
					<li><a href="./hq.php">HQ</a></li>
					<li><a href="./live.php">Planetside Live</a></li>
					<li><a href="./missions.php">Missions</a></li>
					 </ul>
				</li>	 
				<li><a href="./cc/">Communication</a>
				 <ul class="sub-level">
					<li><a href="./masterthread.php">Threads</a></li>
					<li><a href="./recruit.php">Search</a></li>
				  </ul>
				</li>
				<li><a href="./media.php">Downloads</a>
				 <ul class="sub-level">
					<li><a href="./mastermedia.php">All</a></li>
					<li><a href="./searchmedia.php">Search</a></li>	
					</ul>
				</li>
				<li><a href="./about.php">About</a>
					 <ul class="sub-level">
						<li><a href="./rules.php">Rules</a></li>
						<li><a href="./recruitment.php">Recruitment</a></li>
						<li><a href="./alliances.php">Alliances</a></li> 
					 </ul>
				</li>
				<li><a href="./profile.php">Profile</a>
					<ul class="sub-level">
						<li><a href="./messages.php">Messages</a></li>
						<li><a href="./configure.php">Configure</a></li>
						<li><a href="./logout.php">Logout</a></li>
					</ul>
				</li>
				<li><a href="./logout.php">Logout</a>

				</li>
			</ul>
		</div>
		
		<?php
		echo"</div>";
	}
	function getUsersOnline()
	{
		echo"<div id=shell-usersonline>";
			echo"<div id=shell-usersonline-inner>";
				echo"<htmltag style='font-size:18px; color:#f6b620'>Members Online</htmltag>";
				echo"<div id=shell-member-list>";
					echo"amiller<br>fonsi<br>restodrood<br>b4rt<br>";
				echo"</div>";	
			echo"</div>";
		echo"</div>";
	}
	function getNewestUser()
	{
		echo"<div id=shell-newestuser>";
			echo"<div id=shell-newestuser-inner>";
				echo"<htmltag style='font-size:18px; color:#f6b620'> Newest Members</htmltag>";
				
				echo"<div id=shell-member-list>";
					echo"amiller<br>fonsi<br>restodrood<br>b4rt<br>";
				echo"</div>";	
			echo"</div>";
		echo"</div>";
	}
	function getFrontPagePost()
	{
		echo"<div id=shell-frontpage-post>";
			echo"<div id=shell-frontpage-post-pic>";
					echo"<img src='http://198.101.214.138/valar/valarmorghulis/media/icons/ncicon.png'>";
			echo"</div>";
			echo"<div id=shell-frontpage-post-subj>";
				echo" Here is the first post on the new site. So far it looks nice!";
			echo"</div>";
			echo"<div id=shell-frontpage-post-text>";
				echo"After two weeks of developing the website and three full revisions later ";
				echo"I am proud to present you all with the first alpha of valar website. ";
				echo"This website will be used primlairy for organizing a planetside 2 outfit";
				echo"Planetside 2 should be going beta within the next week or so. Hopefully by";
				echo"tommarow we can be playing online and start recruiting for the outfit";
			echo"</div>";
			echo"<div id=shell-frontpage-post-info>";
				echo"amiller <br> June 29th, 2012 <br> 8:03pm <br>";
			echo"</div>";
			
		echo"</div>";
		echo"<div id=shell-frontpage-space></div>";
		echo"<div id=shell-frontpage-post>";
			echo"<div id=shell-frontpage-post-pic>";
					echo"<img src='http://198.101.214.138/valar/media/icons/ncicon.png'>";
			echo"</div>";
			echo"<div id=shell-frontpage-post-subj>";
				echo" Here is the first post on the new site. So far it looks nice!";
			echo"</div>";
			echo"<div id=shell-frontpage-post-text>";
				echo"After two weeks of developing the website and three full revisions later ";
				echo"I am proud to present you all with the first alpha of valar website. ";
				echo"This website will be used primlairy for organizing a planetside 2 outfit";
				echo"Planetside 2 should be going beta within the next week or so. Hopefully by";
				echo"tommarow we can be playing online and start recruiting for the outfit";
			echo"</div>";
			echo"<div id=shell-frontpage-post-info>";
				echo"amiller <br> June 29th, 2012 <br> 8:03pm <br>";
			echo"</div>";
		echo"</div>";
		echo"<div id=shell-frontpage-space></div>";
		echo"<div id=shell-frontpage-post>";
			echo"<div id=shell-frontpage-post-pic>";
					echo"<img src='https://192.168.1.200/valarmorghulis/media/icons/ncicon.png'>";
			echo"</div>";
			echo"<div id=shell-frontpage-post-subj>";
				echo" Here is what a long post will look like";
			echo"</div>";
			echo"<div id=shell-frontpage-post-text>";
				echo"This session of the Reichstag takes place on a date which is full of significance for the German people. Four years have passed since the beginning of that great internal revolution which in the meantime has been giving a new aspect to German life. This is the period of four years which I asked the German people to grant me for the purpose of putting my work to the test and submitting it to their judgment. Hence at the present moment nothing could be more opportune than for me to render you an account of all the successes that have been achieved and the progress that has been made during these four years, for the welfare of the German people. But within the limits of the short statement I have to make it would be entirely impossible to enumerate all the remarkable results that have been reached during a time which may be looked upon as probably the most astounding epoch in the life of our people. That task belongs rather to the press and the propaganda. Moreover, during the course of the present year there will be an Exposition here in Berlin which is being organized for the purpose of giving a more comprehensive and detailed picture of the works that have been completed, the results that have been obtained and the projects on which work has been begun, all of which can be explained better in this way than I could do it within the limits of an address that is to last for two hours. Therefore I shall utilize the opportunity afforded me by this historic meeting of the Reichstag to cast a glance back over the past four years and call attention to some of the new knowledge that we have gained, some of the experiences which we have been through, and the consequences that have resulted thereof--in so far as these have general validity. It is important that we should understand them clearly, not only for our own sake but also for that of the generations to come."
				."Having done this, I shall pass on to explain our attitude toward those problems and tasks whose importance for us and for the world around us must be appreciated before it will be possible to live in better relations with one another. Finally I should like to describe as briefly as possible the projects which I have before my mind for our work in the near future and indeed in the distant future also.";
			echo"</div>";
			echo"<div id=shell-frontpage-post-info>";
				echo"amiller <br> June 29th, 2012 <br> 8:03pm <br>";
			echo"</div>";
			
		echo"</div>";
	}
	function getFooter()
	{
		echo"<div id=shell-footer>";
		
		echo"</div>";
	}
	function getThreadPage()
	{
		echo"<div id=shell-main>";
			echo"<div id=shell-top>";
				getBanner();
				getTopStats();
			echo"</div>";
			echo"<div id=shell-blank></div>";
			echo"<div id=shell-content>";
				getNavigation();
				getThreads();
				//getUsersOnline();
				//getNewestUser();
			echo"</div>";
			echo"<div id=shell-blank></div>";

			echo"<div id=shell-bottom>";
				getFooter();
			echo"</div>";
			echo"<div id=shell-blank></div>";
		echo"</div>";
		
	}
	function getThreads()
	{
		echo"<div id=thread-list>";
			echo"<div id=thread-space></div>";
			echo"<div id=thread-one>";
				echo"<div id=thread-picture><img src='./media/icons/5050/nc.jpg'";
				echo"</div>";
				echo"<div id=thread-title> THis is a Demo title";
				echo"</div>";
				echo"<div id=thread-subject>This is a demo subject";
				echo"</div>";
				echo"<div id=thread-author>Andrew"
				;echo"</div>";
				echo"<div id=thread-date>January 29, 2012";
				echo"</div>";
				echo"<div id=thread-hits>234";
				echo"</div>";
				echo"<div id=thread-replies>23";
				echo"</div>";
			echo"</div>";
			echo"<div id=thread-space></div>";

		echo"</div>";
	}
	function connectDB()
	{
		mysql_connect("localhost", "derp", "d41d8cd98f00b204e9800998ecf8427e") or die(mysql_error());
		mysql_select_db("planetside2") or die(mysql_error());
	
	
	}
?>