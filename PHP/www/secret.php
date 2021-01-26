<?php 
    session_start();
    if($_SESSION['login']) {
        echo "Secret started!";
    }
    else {
        echo "Incorrect login!";
    }

    //Destroy the session variable
    unset($_SESSION['login']);
?>