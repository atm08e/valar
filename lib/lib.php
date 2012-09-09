
		
<?php

	function getMainPage()
	{
		mysql_query("UPDATE counter SET counter = counter + 1");
		mysql_query("UPDATE dailycounter SET dailycounter = dailycounter + 1");
		
		echo"<div id=shell-main>";
			echo"<div id=shell-top>";
				getBanner();
				//getWelcome();
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
				echo"Members: ";
					$result = mysql_query("SELECT COUNT(  username ) as id FROM users")or die(mysql_error());  
					while($row = mysql_fetch_array($result))
					{
						echo $row['id']."<br>";	
					}
				echo"Online:";
				$result = mysql_query("SELECT COUNT(  ident ) as id FROM online")or die(mysql_error());  
				while($row = mysql_fetch_array($result))
				{
					echo $row['id']."<br>";	
				}
				
			echo"</div>";
			echo"<div id=shell-topstats-middle>";
				echo"Server<br>";
				echo"US East Beta 01";
			echo"</div>";
			echo"<div id=shell-topstats-middle>";
				echo"ribbit";
			echo"</div>";
			echo"<div id=shell-topstats-middle>";
				echo"Hits All: ";
					$count = mysql_fetch_row(mysql_query("SELECT counter FROM counter"));
					print "$count[0] <br>";
			echo"</div>";
			echo"<div id=shell-topstats-right>";
				echo"All men must die";
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
				<li><a href="http://www.valar-morghulis.org/valar/hq.php">Main</a>
					<ul class="sub-level">
					<li><a href="http://www.valar-morghulis.org/valar/hq.php">HQ</a></li>
					<li><a href="http://www.valar-morghulis.org/valar/live.php">Planetside Live</a></li>
					<li><a href="http://www.valar-morghulis.org/valar/missions.php">Missions</a></li>
					 </ul>
				</li>	 
				<li><a href="http://www.valar-morghulis.org/valar/cc/index.php">Communication</a>
				 <ul class="sub-level">
					<li><a href="http://www.valar-morghulis.org/valar/cc/index.php">Threads</a></li>
					<li><a href="http://www.valar-morghulis.org/valar/cc/search.php">Search</a></li>
				  </ul>
				</li>
				<li><a href="http://www.valar-morghulis.org/valar/media.php">Media</a>
				 <ul class="sub-level">
					<li><a href="http://www.valar-morghulis.org/valar/media.php">All</a></li>
					<li><a href="http://www.valar-morghulis.org/valar/searchmedia.php">Search</a></li>	
					</ul>
				</li>
				<li><a href="http://www.valar-morghulis.org/valar/about.php">About</a>
					 <ul class="sub-level">
						<li><a href="http://www.valar-morghulis.org/valar/cc/viewtopic.php?id=3">Rules</a></li>
						<li><a href="http://www.valar-morghulis.org/valar/cc/viewtopic.php?id=4">Recruitment</a></li>
						<li><a href="http://www.valar-morghulis.org/valar/alliances.php">Alliances</a></li> 
					 </ul>
				</li>
				<li><a href="http://www.valar-morghulis.org/valar/cc/profile.php">Profile</a>
					<ul class="sub-level">
						<li><a href="http://www.valar-morghulis.org/valar/cc/profile.php">Configure</a></li>
						<li><a href="http://www.valar-morghulis.org/valar/cc/login.php">Logout</a></li>
					</ul>
				</li>
				<li><a href="http://www.valar-morghulis.org/valar/cc/login.php"">Logout</a>

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
					
					 $result = mysql_query("select o.ident FROM online o")or die(mysql_error());  
					while($row = mysql_fetch_array($result))
					{
						echo $row['ident']."<br>";	
					}
					 
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
					echo"Allmenmustdie<br>Rambus<br>";
				echo"</div>";	
			echo"</div>";
		echo"</div>";
	}
	function getFrontPagePost()
	{
		require("./lib/frontpagecontent.php");
	}
	function getFooter()
	{
		echo"<div id=shell-footer>";
		
		echo"</div>";
	}

	


?>