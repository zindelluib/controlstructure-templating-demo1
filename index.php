<!DOCTYPE html>
<html>
<head>
	<title>Conditions</title>
</head>
<body>
	<h1>Odd or Even</h1>
	<?php
		if(isset($_POST["num"]))
			$num  = $_POST["num"];
		else
			$num  = "";

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			if(is_numeric($num)){
				if($num <= 0){
					echo "$num is not allowed";
				}
				else {
					if($num % 2 == 0)
						echo "$num is an even number.";
					
					else
						echo "$num is an odd number.";
				}
			}
			else{
				echo "No number inputted";
			}
			
		}

	?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
		<label>Enter a number: </label>
		<input type="number" name="num" value="<?php echo $num;?>"><br><br>
		<input type="submit" name="submit" value="Check">
	</form>

</body>
</html>