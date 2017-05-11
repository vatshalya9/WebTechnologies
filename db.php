<?php 

$con=mysql_connect("localhost","test","test");
	mysql_set_charset('utf8',$con);
		if(!$con)
		{
			echo "could not connect to the host";
		}
		$db=mysql_select_db("ajax");
		if(!$db)
		{
			echo "could not connect to the database";
		}
?>