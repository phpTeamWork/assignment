<?php
    //Session started
    session_start();

    //Default welcome message
    echo "Welcome to question 5! Below you can see the session variables previously stored by question 4.<br><br>";

    //Output of variables
    if(isset($_SESSION['name'])&&isset($_SESSION['age'])){
        echo "This is your name: ".$_SESSION['name'];
        echo "<br>This is your age: ".$_SESSION['age'];
    } else{
        echo "You did not visit question 4 yet!";
    }