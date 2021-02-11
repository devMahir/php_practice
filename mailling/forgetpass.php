<form action="" method="post">
	recover password
	<input type="text" name="email">
	<input type="submit" name="submit">
</form>

<?php


	if (isset($_POST['submit'])) {
		$to_email = $_POST['email'];

		$conn = mysqli_connect('localhost', 'root', '', 'schoolmanagement');
		$sql = "SELECT * FROM users WHERE email = '$to_email'";
		$result = mysqli_query($conn, $sql);

		$count = mysqli_num_rows($result);
		
		if ($count>0) {

			while ($row = mysqli_fetch_assoc($result)) {

				$password = $row['password'];		

				$subject = "Password Recovery";
				$body = "Your password is: $password";
				$headers = "";

				if (mail($to_email, $subject, $body, $headers)) {
					echo "Your password successfully send to $to_email";
				}else{
					echo "Password recover Failed.";
				}
			}
		}else{
			echo "Email not found";
		}
	}
?>