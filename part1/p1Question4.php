<?php 
    //Session started
    session_start(); 
?> 

<html> 
    <body>
        <!--Showing form with POST method-->
        <p>Using POST method:</p>
        <form action="StoringVariables.php" method="post">
            <label for="name">Please enter your name: </label>
            <input type="text" name="name">
            <label for="age">Please enter your age: </label>
            <input type="text" name="age">
            <input type="submit" name="submit" value="Store in session variable">
        </form>
        <br>

        <!--Showing form with GET method-->
        <p>Using GET method:</p>
        <form action="StoringVariables.php" method="get">
            <label for="name">Please enter your name: </label>
            <input type="text" name="name">
            <label for="age">Please enter your age: </label>
            <input type="text" name="age">
            <input type="submit" name="submit" value="Store in session variable">
        </form>
    </body> 
</html>
