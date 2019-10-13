# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    mysql_connect.php                                  :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mchocho <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/13 14:52:46 by mchocho           #+#    #+#              #
#    Updated: 2019/10/13 15:07:14 by mchocho          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
<?php

//File contains database access information
//
DEFINE('DB_USER', 'username');
DEFINE('DB_PASSWORD', 'password');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'sitename');

//Make the connection
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect MYSQL: ' . mysqli_connect_error() );

//Set the encoding
mysqli_set_charset($dbc, 'utf8');
