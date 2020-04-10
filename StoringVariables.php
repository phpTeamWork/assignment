<?php
    session_start();
?>

<?php 
    //storing input in session variables POST
    $_SESSION['name'] = $_POST['name']; 
    $_SESSION['age'] = $_POST['age']; 

    //storing input in session variables GET
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['age'] = $_GET['age'];
?>


