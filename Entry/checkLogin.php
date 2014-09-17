<?php
	require 'getConn.php';
	$username = "";
	$pwd = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = test_input($_POST["username"]);	
		$pwd = test_input($_POST["pwd"]);	
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
	$result = mysql_query("select * from `users` where username=".$username);
	if($result == NULL){
		return "用户名不存在！";
	}else if($result['password'] != $pwd){
		return "密码错误！";
	}else{
		return 1;	
	}
?>