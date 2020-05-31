<!--Error Handling for the form-->
<?php
    require_once __DIR__.'/top_nav.php';
    require_once __DIR__.'/bottom_nav.php';
    require_once __DIR__.'/includes/bootstrap.php';
    require_once __DIR__.'/includes/dbh.php';
    //Checking if the user clicked on submit and proceeds to error handling 

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nameErr = $emailErr = $mobError = $subjectErr = $messageErr = "";
        $name = $email = $mobno = $subject = $message = "";

        //If the name field is left empty
        if (empty($_POST["name"])) {
            $nameErr = "Your full name is required";
            $validation['nameError'] = $nameErr;
        }
        else
        {
            $name = $db -> safe($_POST["name"]); //clean input function retrieved from dbh.php
        }   
        if(!empty($_POST["email"])){
            $email = $db -> safe($_POST["email"]);

            //To check if the email is valid
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $emailErr = 'E-mail entered is invalid. Please try again';
            $validation['emailError'] = $emailErr;
            }
        }
        else
        {
            $emailErr = "Your E-mail is required";
            $validation['emailError'] = $emailErr;
        }
        if(!empty($_POST["mobno"])){
            $mobno = $db -> safe($_POST["mobno"]); //clean input function retrieved from dbh.php
            //To check if only numeric values were entered is_numeric function is used
           if(!is_numeric($_POST['mobno'])){
            $mobError = 'Mobile number entered is invalid. Please try again';
            $validation['mobError'] = $mobError;
           }
           
        }else{
            $mobError = "Mobile Number is required";
            $validation['mobError'] = $mobError;
        }
        if (!empty($_POST["subject"])) {
            $subject = $db -> safe($_POST["subject"]); //clean input function retrieved from dbh.php
            if(strlen($subject) > 20){ //input longer than 20 characters not allowed in subject field
                $subjectErr =  "Subject cannot be longer than 20 characters.";
                $validation['subjectError'] = $subjectErr;
            }
        }
        if (!empty($_POST["message"])) {
            $message = $db -> safe($_POST["message"]); //clean input function retrieved from dbh.php
            if(strlen($message) > 200){ //input longer than 200 characters not allowed in the message area 
                $messageErr =  "Message cannot be longer than 200 characters.";
                $validation['messageError'] = $messageErr;
            }
        }
        else{
            $messageErr = "Message is required";
            $validation['messageError'] = $messageErr;
        }

        //If all validations are checked and there are no errors in the form 
        if (empty($nameErr) && empty($emailErr) && empty($mobError) && empty($subjectErr) && empty($messageErr))
        {
            //Form values are reset to empty once form is completed successfully
            $formvalues = [];
            $validation['pagemessage'] = "Thank you. We have received your submission and should reply shortly.";
        }
        else
        {
            //if the form is not submitted successfully, these values remain in the form and are not lost 
            $formvalues['name'] = $name;
            $formvalues['email'] = $email;
            $formvalues['mobno'] = $mobno;
            $validation['pagemessage'] = "Error. Please try again.";
        }

        //Render view with validations
        echo $twig->render('contactpage.html', [ 
            'validation' => $validation, 
            'formvalues' => $formvalues,
            'menuTypes'  => $menuTypes, 'bottomDetails' => $details] );
    }
    else
    {
        //Render view without validations
        echo $twig->render('contactpage.html', ['menuTypes' => $menuTypes, 'bottomDetails' => $details]);
    }