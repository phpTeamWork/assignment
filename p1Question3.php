<?php
    //Session started
    session_start();

    //Default welcome message
    echo "Welcome to question 3!";

    //Determining if this is the first time that the user has loaded the page
    if(isset($_SESSION['dateToday'])){
        //This is not the first time, determine and output number of seconds
        $_SESSION['dateNow'] = date("d/m/Y, H:i:s");
        $seconds = strtotime($_SESSION['dateNow']) - strtotime($_SESSION['dateToday']);
        echo "<br>You last logged in ".$seconds." seconds ago.";
    } else{
        //This is the first time
        $_SESSION['dateToday'] = date("d/m/Y, H:i:s");
        echo " This is the first time you loaded this page.<br>This is the current date and time: ".$_SESSION['dateToday'];
    }