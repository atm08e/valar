<?php

// database conncection information
	function connectDB()
	{
		mysql_connect("localhost", "derp", "d41d8cd98f00b204e9800998ecf8427e") or die(mysql_error());
		mysql_select_db("planetside2") or die(mysql_error());
	
	
	}
?>