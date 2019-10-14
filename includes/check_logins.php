# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    ft_check_logins.php                                :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mchocho <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/13 14:26:50 by mchocho           #+#    #+#              #
#    Updated: 2019/10/14 18:42:07 by mchocho          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
<?php

function ft_check_logins($dbc, $email='', $pass='')
{
	require('./mysql_connect.php');
	$errors = array();

	//Check email first
	if (empty($email))
		$errors[] = 'Please enter your email address.';
	else
		$e = mysqli_real_escape_string($dbc, trim($email));

	//Validate password
	if (empty($pass))
		$errors[] = 'Please enter your password.';
	else
		$p = mysqli_real_escape_string($dbc, trim($pass));

	//Terminate on error
	if (!empty($errors))
		return array(false, $error);

	//Create the query
	$q = "SELECT user_id, username FROM users WHERE email='$e' AND pass=SHA1('$p')";
	$r = @mysqli_query($dbc, $q);

	//Check the result:
	if (mysqli_num_rows($r) == 1) {
		//Fetch the record
		$row = mysqli_fetch_array($r, MYSQLI_ASSOC);

		//Return record
		return array(true, $row);
	}
	errors[] = 'Sorry, your email or password was incorrect.';
	return array(false, errors);
}

?>
