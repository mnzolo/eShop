<?php

function registration() {
	$errors = array();

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		//Connect to DB
		require('mysql_connect.php');

		$value = array();

		//Check for username
		if (empty($_POST['username']))
			$errors[] = 'Please provide a username';
		else
			$name = mysqli_real_escape_string($conn, trim($_POST['username']));

		//Check for email address
		if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			$errors[] = 'Please enter your email address';
		else
			$email = mysqli_real_escape_string($conn, trim($_POST['email']));
			//Check for password and confirmation
			if (empty($_POST['password']))
			$errors[] = 'Please enter a password';
			else if ($_POST['password'] !== $_POST['password2'])
			$errors[] = 'Fuck outta here. Your passwords don\'t match';
			else
			$passwd = mysqli_real_escape_string($conn, trim($_POST['password']));

		//Check for errors
		if (empty($errors)) {
			//Register the user in the database
			$passwd = SHA1('$passwd');
			$query = "INSERT INTO users (uidUser, emailUser, pwdUser) VALUES ('$name', '$email', '$passwd' );";
			$result = mysqli_query($conn, $query);	//Run the query.
			$_SESSION['user_logged_in'] = true;
			$_SESSION['username'] = $_POST['username'];                          
			header("Location: ../index.php?signup=success");
			
		}
		mysqli_close($conn);	//Close the database connection
	}
	return $errors;
}
print_r(registration());
