<!DOCTYPE html>
<html>
<head>
	<title>Switch Demo</title>
</head>
<body>
	<h1>Switch Demo</h1>
	<?php
		$result  = 0;
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$num1  =  $_POST['num1'];
			$num2  = $_POST['num2'];
			$choice  = $_POST['operation'];
			
			switch($choice){
				//Add numbers
				case 1:
					$result  = $num1 + $num2;
					break;
				//Subtract
				case 2:
					$result  = $num1 - $num2;
					break;
				//Multiply
				case 3:
					$result  = $num1 * $num2;
					break;
				//Divide
				case 4:
					$result  = $num1 / $num2;
					break;
				default:
					echo "Invalid Choice<br>";
			}

		}

	?>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<label>Result: </label>
		<input type="text" name="result" value="<?php echo $result; ?>" disabled><br><br>
		<label>Enter first number: </label>
		<input type="number" name="num1" value="<?php echo $num1; ?>"><br><br>
		<label>Enter second number: </label>
		<input type="number" name="num2" value="<?php echo $num2; ?>"><br><br><br>
		<label>Operation: </label><br>
		<input type="radio" name="operation" value="1" checked>
		<label>Add</label>
		<input type="radio" name="operation" value="2">
		<label>Subtract</label>
		<input type="radio" name="operation" value="3">
		<label>Multiply</label>
		<input type="radio" name="operation" value="4">
		<label>Divide</label>
		<br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>