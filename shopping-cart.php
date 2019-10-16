<?php
    /* include ("connection.php");
    opencon(); */
    $con = mysqliconnect("localhost","root","","fshop");

    if(mysqliconnecterrno())
    {
        echo "connection failed";
    }

    function  cart()
    {
        foreach($_)
    }
    /* closecon(); */
?>