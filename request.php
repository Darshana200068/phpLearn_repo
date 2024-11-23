<?php
    if(isset($_REQUEST["name"])|| isset($_POST["age"])){
        if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
            die("Invalid name.Name should be alphabet");
        }
        echo "Hi ".$_REQUEST["name"].".<br>";
        echo "Your age is ".$_REQUEST["age"]." Years.";
        exit();
    }

?>

<html>
    <head></head>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <pre>

            Name: <input type="text" name="name">

            Age : <input type="text" name="age">

                  <input type="submit">
            </pre>
            

            
        </form>
    </body>
</html>