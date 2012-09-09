<?php
	require("/usr/share/valar/lib/db.php");
	connectDB();
	mysql_query("UPDATE dailycounter SET dailycounter=0;")or die(mysql_error());  
?>