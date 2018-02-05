<?php
	require 'dbutil.php';
	require 'dbconfig.php';

	session_start();
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$db = new DB();
	$db->connect($dsn,$username,$password);
	$query = "insert into student (name , dob) values (:name,:dob)";
	$params = array(":name"=>$name,":dob"=>$dob);
	$result = $db->insert($query,$params);
?>