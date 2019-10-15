# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
/*   registration.php                                   :+:      :+:    :+:   */
#                                                     +:+ +:+         +:+      #
#    By: mchocho <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/14 18:30:48 by mchocho           #+#    #+#              #
/*   Updated: 2019/10/15 02:19:05 by marvin           ###   ########.fr       */
#                                                                              #
# **************************************************************************** #

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
			$name = mysqli_real_escape_string($dbc, trim($_POST['username']));

		//Check for email address
		if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
			$errors[] = 'Please enter your email address';
		else
			$email = mysqli_real_escape_string($dbc, trim($_POST['email']));

		//Check for password and confirmation
		if (empty($_POST['password']))
			$errors[] = 'Please enter a password';
		else if ($_POST['password'] !== $_POST['password2'])
			$errors[] = 'Fuck outta here. Your passwords don\'t match'
		else
			$passwd = mysqli_real_escape_string($dbc, trim($_POST['password']));

		//Check for errors
		if (empty($errors)) {
			//Register the user in the database
			$query = "INSERT INTO users (username, email, password, registration_date) VALUES ($name, $email, SHA1('$passwd'), NOW() )";
			$result = @mysqli_query($dbc, $query);	//Run the query.
		}
		mysqli_close($dbc);	//Close the database connection
	}
	return $errors;
}
