<?php
	require("./lib/lib.php");
	session_start();
	html_header();	
	//if(!session_is_registered(myusername))
	//{
	//		echo " No Session ";	
	//}
	//else
	//{
		connectDB();
		getMainPage();
	//}
?>