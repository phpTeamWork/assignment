<?php 
//starting the session 
    session_start(); 
?> 

<html> 

<body>

<form method="post">
    POST: <br>    
    Please enter your name: <input type="text" name="name"> 
    Please enter your age: <input type="text" name="age"> 
    <input type="submit" value="Store in session variable"> 
</form> 

<form method="get">
    GET: <br>
    Please enter your name: <input type="text" name="name"> 
    Please enter your age: <input type="text" name="age"> 
    <input type="submit" value="Store in session variable"> 
</form>



</body> 

</html>
