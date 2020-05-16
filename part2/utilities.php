<?php
 //For code that will be re-used
    function clean_input($data) {
        $data = trim($data);
        //stripslashes(): To remove backslashes.
        $data = stripslashes($data);
        //htmlspecialchars():  To convert special characters into HTML entities.
        $data = htmlspecialchars($data);
        return $data;
    }
?>
