<?php
	require 'dbutil.php';
	require 'dbconfig.php';
	require 'student.php';

	session_start();
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$answer = $_POST['answer'];
	$result = $_SESSION['num1'] + $_SESSION['num2'];
	$_SESSION['num1'] = null;$_SESSION['num2'];
	if($answer == $result) {
		$db = new DB();
		$db->connect($dsn,$username,$password);
		$query = "select name from student where name =:name and dob=:dob";
		$params = array(":name"=>$name,":dob"=>$dob);
		$result = $db->select($query,$params,"Student");
		if(count($result) == 0){
			echo "login failure";
		}
		else {
			echo "Login success";
		}
	}else{
		echo "incorrect data";
	}
?>