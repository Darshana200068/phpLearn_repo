<html>
    <head>

    </head>
    <body>
        <?php
            //if Statments
            $var=5;
            if($var>=75){
                echo "<center>";
                echo "<h2>High</h2>";
                echo "</center>";
            }
            elseif($var>=50){
                echo "<center>";
                echo "<h2>Medium</h2>";
                echo "</center>";

            }
            else{
                echo "<center>";
                echo "<h2>Low</h2>";
                echo "</center>";
            }

            //swich statement
            $_var=1;
            switch($_var){
                case 1:
                    echo "Easy";
                    break;
                case 2:
                    echo "Medium";
                    break;
                case 3:
                    echo "Hard";
                    break;
                default:
                    echo "Invalid";
            }
        ?>
    </body>
</html>