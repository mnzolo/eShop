<?php

function ft_check_logins($email='', $pass='')
{
	require('./mysql_connect.php');
	$errors = array();

	//Check email first
	if (empty($email))
		$errors[] = 'Please enter your email address.';
	else
		$e = mysqli_real_escape_string($conn, trim($email));

	//Validate password
	if (empty($pass))
		$errors[] = 'Please enter your password.';
	else
		$p = mysqli_real_escape_string($conn, trim($pass));

	//Terminate on error
	if (!empty($errors))
		return array(false, $error);

		//Create the query
		$q = "SELECT id, uidUser FROM users WHERE emailUser='$e' AND pwdUser=SHA1('$p')";
		$r = mysqli_query($conn, $q);
		
		//Check the result:
		if (mysqli_num_rows($r) == 1) {
			//Fetch the record
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			
			//Return record
			
			print_r($row);
			
			return array(true, $row);
		}
		$errors[] = 'Sorry, your email or password was incorrect.';
		return array(false, errors);
	}
	
	header("Location: ../index.php?signin=success");
ft_check_logins($_POST['useremail'], $_POST['userpasswd']);

?>
