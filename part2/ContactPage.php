<html>

<head>
  <title>The Contact Page</title>
</head>
<body>

    <h3>Contact the Restaurant<h3></br>
    <h3>Kindly submit a form if you wish to book a table, ask us a question or make a complaint<h3>
      <!--The form to be filled by the user to contact the restaurant -->
      <form action="includes/contactform.php" method="POST">

    <?php
      //If user makes a mistake in the form, name and subject will not be deleted 
      if(isset($_GET['name'])){
        $name = $_GET['name'];
        echo '<input type="text" name="name" placeholder="Full Name" value="'.$name.'">';
      }
      else{
        echo '<input type="text" name="name" placeholder="Full Name">';
      }
    ?>

    <!--E-mail will not be saved inside the field when the user makes a mistake-->
    <input type="text" name="email" placeholder="E-mail Address">
  
    <?php
      if(isset($_GET['subject'])){
        $subject = $_GET['subject'];
        echo '<input type="text" name="subject" placeholder="Subject" value="'.$subject.'">';
      }
      else{
        echo '<input type="text" name="subject" placeholder="Subject">';
      }
    ?>
        <!--message will have to be re-typed if user makes a mistake in other fields-->
        <textarea name="message" placeholder="Your Message"></textarea>  
        <button type="submit" name="submit">Submit</button>
      </form>
  
    

    <!--The code below will display the error messages if the form is not completed correctly-->
    <?php 

    /* FIRST METHOD
    //The error is displayed according to what is being said inside the URL once the error occurs
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        //strpos searches for a certain string inside the URL and if it returns that string then it echoes the corresponding error message
        if(strpos($fullUrl, "submit=empty") == true){
            echo "All fields are required to be filled. Please try again!";
            exit();
        }
        else if(strpos($fullUrl, "submit=invalidemail") == true){
          echo "You used an invalid email. Please try again!";
          exit();
        }
        else if(strpos($fullUrl, "submit=invalidtext") == true){
          echo "You used an invalid character. Please try again!";
          exit();
        }
       else if(strpos($fullUrl, "submit=error") == true){
          echo "Form not submitted succesfully. Please try again!";
          exit();
        }
        else if(strpos($fullUrl, "submit=success") == true){
          echo "Form has been submitted successfully. We will get back to you as soon as possible!";
          exit();
        }
      
        */

        //2nd method so there is no need to get entire URL
        //Purpose of get method is if the user makes a mistake in one field they do not lose data of other correct fields 
        if(!isset($_GET['submit'])){
          exit();
        }
        else{
          $submitCheck = $_GET['submit'];
          if($submitCheck == "empty"){
            echo "All fields are required to be filled. Please try again!";
            exit();
          }
          else if($submitCheck == "invalidemail"){
            echo "You used an invalid email. Please try again!";
            exit();
          }
          else if($submitCheck == "invalidtext"){
            echo "You used an invalid character. Please try again!";
            exit();
          }
          else if($submitCheck == "error"){
            echo "Form not submitted succesfully. Please try again!";
          exit();
          }else if($submitCheck == "success"){
            echo "Form has been submitted successfully. We will get back to you as soon as possible!";
            exit();
          }
        }
    ?>
</body>
</html>


