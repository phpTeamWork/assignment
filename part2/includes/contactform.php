<!--Error Handling for the form -->

<?php
    //Checking if the user clicked on submit and proceeds to error handling 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

    //Checks if the user has left a field empty
        if(empty($name) || empty($email) || empty($subject) || empty($message)){
            header("Location: ../contactpage.php?submit=empty&name=$name&subject=$subject");
        }
    //Checks if the email provided is valid
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../contactpage.php?submit=invalidemail&name=$name&subject=$subject");
        }
    //Checks if the user typed in valid characters in the name field, only accepting letters
        else if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            header("Location: ../contactpage.php?submit=invalidtext&subject=$subject");
        }
    //Checks if the user typed in valid characters in the subject field, accepting both letters and numbers
        else if(!preg_match("/^[a-zA-Z0-9]+$/",$subject)){
            header("Location: ../contactpage.php?submit=invalidtext&name=$name");
        }
    //If the form is successfully submitted
        else{
            header("Location: ../contactpage.php?submit=success");
        }
    }
    //If the form is not successfully submitted
    else{
        header("Location: ../contactpage.php?submit=error");
    }
?>


