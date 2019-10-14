# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    registration.php                                   :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mchocho <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/14 18:30:48 by mchocho           #+#    #+#              #
#    Updated: 2019/10/14 18:45:21 by mchocho          ###   ########.fr        #
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

		//Check for email address
		if (empty($_POST['email']))
			$errors[] = 'Please enter your email address';

		//Check for password and confirmation
		if (empty($_POST['password']))
			$errors[] = 'Please enter a password';
		else if ($_POST['password'] !== $_POST['password2'])
			$errors[] = 'Fuck outta here. Your passwords don\'t match'
		else

	}

	return $errors;
	
}
