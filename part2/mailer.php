<?php

//This page was adapted from https://alexwebdevelop.com/phpmailer-tutorial/

    /* Namespace alias. */
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    /* Include the Composer generated autoload.php file. */
    require_once __DIR__.'/includes/vendor/autoload.php';

    function sendEmail($name, $email, $mobile, $subject, $message) {//function used by contactform.php
        //Create email body
        $body = "Message: ".$message."\n\nMobile number: ".$mobile;

        $email = substr($email, 1, -1); //Removing quotes from email, the rest of the email is passed from the safe() method
        
        /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
        $mail = new PHPMailer(TRUE);

        /* Open the try/catch block. */
        try {
            /* Set the mail sender. */
            $mail->setFrom($email, $name);
        
            /* Add a recipient. */
            $mail->addAddress('jamie.buttigieg-vella.19@um.edu.mt', 'Admin');
            $mail->addCC('francesca.abela.19@um.edu.mt', 'Admin');
        
            /* Set the subject. */
            $mail->Subject = $subject;
        
            /* Set the mail message body. */
            $mail->Body = $body;
        
            /* Finally send the mail. */
            $mail->send();
        
        } catch (Exception $e) {
        
            /* PHPMailer exception. */
            echo $e->errorMessage();
        
        } catch (\Exception $e) {
        
            /* PHP exception (note the backslash to select the global namespace Exception class). */
            echo $e->getMessage();
        }
    }

    function sendFavourites($email, $body) {//function used by email.php
        $email = substr($email, 1, -1); //Removing quotes from email, the rest of the email is passed from the safe() method
        
        /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
        $mail = new PHPMailer(TRUE);

        /* Open the try/catch block. */
        try {
            /* Set the mail sender. */
            $mail->setFrom("hotwokmalta@email.com", "HOT WOK");
        
            /* Add a recipient. */
            $mail->addAddress($email);
        
            /* Set the subject. */
            $mail->Subject = "Your favourite dishes from our Restaurant";
        
            /* Set the mail message body. */
            $mail->Body = $body;
        
            /* Finally send the mail. */
            $mail->send();
        
        } catch (Exception $e) {
        
            /* PHPMailer exception. */
            echo $e->errorMessage();
        
        } catch (\Exception $e) {
        
            /* PHP exception (note the backslash to select the global namespace Exception class). */
            echo $e->getMessage();
        }
    }