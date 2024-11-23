<html>
    <head></head>
    <body>
        <?php
            //while loop
            $var=2;
            while($var<=5){
                echo "Hello PHP <br>";
                $var++;
            }

            //do while loop

            $count=11;
            do{
                echo "<br>";
                echo "Do While loop PHP";
                $count++;
            }while($count<=10);

            //for loop

            for($i=1;$i<=6;$i++){
                echo "<br>";
                echo "Numbers: $i";
            }
        ?>
    </body>
</html>