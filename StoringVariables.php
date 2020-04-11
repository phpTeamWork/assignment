<?php
    //Session started
    session_start();

    
    //Checking which form was filled
    if(isset($_POST['submit'])) {
        //Storing POST input in session variables
        $_SESSION['name'] = $_POST['name']; 
        $_SESSION['age'] = $_POST['age']; 
    } elseif(isset($_GET['submit'])) {
        //Storing GET input in session variables
        $_SESSION['name'] = $_GET['name'];
        $_SESSION['age'] = $_GET['age'];
    }

    header('Location: p1Question4.php?submit=complete');