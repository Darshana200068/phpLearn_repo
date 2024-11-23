<?php 
    if(isset($_POST["name"])||isset($_POST["age"])){

        /*preg_match(): This is a PHP function that performs a 
        regular expression match. It searches a string for a pattern
         and returns true if the pattern is found, otherwise false*/

         /*The pattern "/[^A-Za-z'-]/" looks for any character that 
        is not an uppercase letter (A-Z), a lowercase 
        letter (a-z), an apostrophe ('), or a hyphen (-).*/

        /*If any such character is found in the name field from 
        the form ($_POST['name']), the function returns true.*/

        if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){

            die("Invalid name.Name should be alphabet");

            /*The die() method in PHP is used to terminate the execution
             of a script. When die() is called, the script stops running
            immediately, and an optional message can be displayed. It's
             often used for error handling, especially when a
            critical error occurs that prevents the script from continuing.*/

            
        }
        echo "Hi ".$_POST["name"].".<br>";
        echo "Your age is ".$_POST["age"]." Years.";
        exit();
    }

?>
<html>
    <head></head>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            Name: <input type="text" name="name">
            Age: <input type="text" name="age">

            <input type="submit">
        </form>
    </body>
</html>