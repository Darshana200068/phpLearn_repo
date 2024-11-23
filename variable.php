<html>
    <head>

    </head>
    <body>
        <?php
            //Variables
            $str = "String Value"; 
            $num=4;
            $float=7.6;
            
            echo $str ."<center>";
            echo "<h2>" .$str."</h2>" ;
            echo "<h2>" .$num."</h2>" ;
            echo "<h2>" .$float."</h2>";


            echo $str ."<br>";

            echo "<h2>".var_dump($str)."</h2>";
            echo "<h2>".var_dump($num)."</h2>";
            echo "<h2>".var_dump($float)."</h2>";

            echo "</center>";

        ?>
    </body>
</html>