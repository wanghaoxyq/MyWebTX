<?php
	$conn = mysql_connect("localhost","root","evangelion");
	if(!$conn){
		die('无法连接到数据库：'. mysql_error());	
	}
	mysql_select_db("info4iot1002",$conn);
?>