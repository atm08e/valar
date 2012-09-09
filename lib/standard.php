<?php

	// html pre header
	function html_header()
	{

		echo"<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'";
		echo"	'http://www.w3.org/TR/html4/loose.dtd'>";
		echo"<html>";
		echo"<head>";
		echo"	<meta http-equiv='Content-Type' content='text/html; charset=utf-8;'>";
		echo"	<title>Valar Morghulis: NC Planetside 2</title>";
		echo"	<link rel='stylesheet' type='text/css' href='./css/1.css'> ";
		echo"	<link rel='shortcut icon' href='./media/favicon.ico'>";
		echo"</head>";
		echo"<body>";
		echo"<div class='frame'id='frame-shell'>";
	}
	// welcome message . breif information about the website
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

?>