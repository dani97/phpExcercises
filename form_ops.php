
<!DOCTYPE html>
<html>
<head>
	<title>Form add multiply</title>
</head>
<body>

	<form action="form_ops.php" method = "post">
		<label>Name: </label>
		<input type="text" name="name" required> <br><br>
		<label>Date of Birth: </label>
		<input type="date" name="dob" required> <br><br>
		<label>Number 1: </label>
		<input type="number" name="num1" required> <br><br>
		<label>Number 2: </label>
		<input type="number" name="num2" required> <br><br>
		<input type="submit" value="add" name="add"> <br><br>
		<input type="submit" value="multiply" name="mul"> <br><br>
	</form>
	<?php
	function performOperation() {
		if(isset($_POST['add']) || isset($_POST['mul'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$name = $_POST['name'];
			$dob = $_POST['dob'];
			$numbers = array($num1 ,$num2 );

			if(isset($_POST['add'])) {
				echo displayMessage($name ,$dob , "addition", add($numbers));
			}

			if(isset($_POST['mul'])) {
				echo displayMessage($name ,$dob , "addition", multiply($numbers));
			}
		}
	}

	function add($numbers) {
		$result = 0;
		foreach($numbers as $number) {
			$result = $result + $number;
		}
		return $result;
	}

	function multiply($numbers) {
		$result = 1;
		foreach($numbers as $number) {
			$result = $result * $number;
		}
		return $result;
	}

	function displayMessage($name ,$dob ,$ops ,$result) {
		$date = new DateTime($dob);

		return "Hi $name <br> DOB:".$date->format("d-M-Y")."  <br> the result of $ops is $result";
	}
 	performOperation();
?>
</body>

</html>