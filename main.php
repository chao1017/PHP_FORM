<html>
	<head><title>PHP Form-Post Demo</title></head>

	<body>
		<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
			<label>Name:</label><input type="text" name="userName"><br><br>
			<label>E-Mail:</label><input type="text" name="email"><br><br>
			<label>Website:</label><input type="text" name="website"><br><br>
			<label>Comment:</label><input type="text" name="comment"><br><br>
			<label>Gender:</label>
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="male">Male

			<br>
			<input type="submit" value="Submit">

		</form>

		<?php
			
			//define variables and set to empty values
			$nameErr = $emailErr = $genderErr = $websiteErr = "";
			$name = $email = $gender = $comment = $website = "";

			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$name = test_input($_POST["name"]);
				$email = test_input($_POST["email"]);
				$website = test_input($_POST["website"]);
				$comment = test_input($_POST["comment"]);
				$gender = $_POST["gender"];
			}

			function test_input($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);

				return $data;				
			}
		?>
	</body>
</html>