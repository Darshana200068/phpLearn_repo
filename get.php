<?php
    /*The isset() function in PHP checks whether a variable is 
    set and is not NULL. It returns true if the variable exists 
    and is not NULL, otherwise it returns false*/
    if(isset($_GEt["name"])||isset($_GET["age"])){

        echo "Hi ".$_GET["name"].".<br>";
        echo "Your age is ".$_GET["age"]." Years.";
        exit();
    }
?>
<html>
    <head></head>
    <body>
    <!-- $_PHP_SELF: This is a superglobal variable in PHP that returns
     the filename of the currently executing script. -->
        <form action="<?php $_PHP_SELF ?>" method="GET">
            Name:<input type="text" name="name"/>
            Age:<input type="text" name="age"/>

            <input type="submit"/>
        </form>
    </body>
</html>