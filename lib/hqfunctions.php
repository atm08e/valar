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
			<link rel="stylesheet" type="text/css" href="./css/2.css"> 
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
	function getNewUsers()
	{
		$result = mysql_query("SELECT * FROM members where age='0' or age='1' or age='2'")or die(mysql_error());  
		echo "<htmltag style='font-size:14px'>New Agents:</htmltag> ";
		while($row = mysql_fetch_array($result))
		{
			echo $row['login']."<br>";
			
		}
	}
	function getagentprof()
	{
		$result = mysql_query("SELECT * FROM members WHERE login='amiller'")or die(mysql_error());  
		echo "<htmltag style='font-size:14px'>Agent Profile:</htmltag> ";
		while($row = mysql_fetch_array($result))
		{
			echo $row['login']."<br>";

		}
	
	}
	function newnav()
	{
?>
	<div id="navigation">
    <ul class="top-level">
        <li><a href="./hq.php">Head Quarters</a>
            <ul class="sub-level">
			<li><a href="./hq.php">Head Quarters</a></li>
			<li><a href="./live.php">Planetside Live</a></li>
			<li><a href="./missions.php">Outfit Missions</a></li>
			 </ul>
		</li>	 
		<li><a href="./cc/">Comm Channel</a>
		 <ul class="sub-level">
			<li><a href="./masterthread.php">Threads</a></li>
			<li><a href="./chat.php">Chat</a></li>
			<li><a href="./recruit.php">Search</a></li>
          </ul>
        </li>
        <li><a href="./media.php">Media Channel</a>
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
	
	}
	function navbar()
	{
?>

	<ul id="navbar">
		<li><a href="./hq.php">Head Quarters</a><ul>
			<li><a href="./live.php">Planetside Live</a></li>
			<li><a href="./missions.php">Outfit Missions</a></li>></ul>
		</li>
		<li><a href="./cc.php">Comm Channel</a><ul>
			<li><a href="./masterthread.php">Threads</a></li>
			<li><a href="./chat.php">Chat</a></li>
			<li><a href="./recruit.php">Search</a></li></ul>
		</li>
		<li><a href="./media.php">Media Channel</a><ul>
			<li><a href="./mastermedia.php">All</a></li>
			<li><a href="./searchmedia.php">Search</a></li></ul>
		<li><a href="./about.php">About</a><ul>
			<li><a href="./rules.php">Rules</a></li>
			<li><a href="./recruitment.php">Recruitment</a></li>
			<li><a href="./alliances.php">Alliances</a></li></ul>
		</li>
		<li><a href="./profile.php">Profile</a><ul>
			<li><a href="./messages.php">Messages</a></li>
			<li><a href="./configure.php">Configure</a></li></ul>
		</li>
		<li><a href="./logout.php">Logout</a></li>	
	</ul>
	</div>

<?php
	}
	function connectDB()
	{
		mysql_connect("192.168.1.201", "overmind", "overmind") or die(mysql_error());
		mysql_select_db("overmind") or die(mysql_error());
		mysql_query("UPDATE counter SET counter = counter + 1");
	
	}
	function getNewestMember(){}
	function usersonline()
	{
	
		$result = mysql_query("SELECT login FROM members WHERE status='online'")or die(mysql_error());  
		$printcounter = 0;
		$count=mysql_num_rows($result);
		echo " <htmltag style='font-size:14px'>Agents Online:</htmltag> <br>";
		while($row = mysql_fetch_array($result))
		{	
				echo $row['login'] ."<br>";
				$printcounter = printcounter+1;
		}
		
		
		mysql_query("UPDATE counter SET online = '$count'");
	}
	function loadthread()
	{
		echo "<br><br><br><br>";
		$result = mysql_query("SELECT * FROM threads")or die(mysql_error());
		
		echo "<div id = masterthread>";
		echo "<table border='0'>";
		echo "<tr><td width='225'>Name</td><td width='250'>Subject</td><td width='45'>Author</td><td width='25'>#V</td><td width='25'>#R</td></tr>";
		while($row = mysql_fetch_array($result))
		{
			echo "<tr><td width='225'>".$row['name']."</td><td width='250'>".$row['subject']."</td><td width='45'>".$row['author']."</td><td width='25'>".$row['numviews']."</td><td width='25'>".$row['numpost']."</td></tr>";
		}
		echo "</table>";
		echo "</div>";
	}
	function loadcontent()
	{
		
		$result = mysql_query("SELECT * FROM content")or die(mysql_error());  

		while($row = mysql_fetch_array($result))
		{
			echo"<div id=frame-messenger>";
			echo "<div id=frame-messenger-header>";
			echo " ".$row['author'] ." - ".$row['time'] ." - ".$row['type']."</div>";
			echo "<div id=frame-messenger-pic><img src='./media/icons/magmus2.jpg'></div>";
			echo"<div id=frame-messenger-text>";
			echo $row['text']."</div></div>";
			echo "<div id=frame-space></div>";
		}
	}
	function getBanner()
	{	
?>	
			<div id=banner>
			Valar Morghulis
			</div>

<?php	
	}
	function getFooter()
	{
		$my_t=getdate(date("U"));
		$count = mysql_fetch_row(mysql_query("SELECT counter FROM counter"));
		echo"<div id=navstats>";
		echo " Valar Morghulis Planetside Outfit: Agents:<htmltag style='color:green'>1</htmltag>  KIA:<htmltag style='color:red'>"."$count[0]"."</htmltag> Emerald USE Server:<htmltag style='color:green'>Online</htmltag> ";		
		echo "<br> Today is ";
		print("$my_t[weekday], $my_t[month] $my_t[mday], $my_t[year]");
		if(isSSL())
		{
			echo ".  Your Connection is <htmltag style='color:green'>Encrypted</htmltag>";
		}
		else
		{
			echo ".  Your Connection is <htmltag style='color:red'><a href='https://192.168.1.200/valarmorghulis/hq.php'>Unencrypted</a> </htmltag>";
		}
		echo"</div>";
	}
	function isSSL()
	{
 
		if($_SERVER['https'] == 1) /* Apache */ {
		return TRUE;
		} elseif ($_SERVER['https'] == 'on') /* IIS */ {
		return TRUE;
		} elseif ($_SERVER['SERVER_PORT'] == 443) /* others */ {
		return TRUE;
		} else {
		return FALSE; /* just using http */
		}	
	}
?>
