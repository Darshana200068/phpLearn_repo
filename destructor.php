<html>
    <head></head>
    <body>
    <center><h2>PHP Destructor</h2></center>
        <?php
            class animals {
                //properties
                public $name;
                public $color;

                //constructor
                function __construct($name,$color){
                    $this->name=$name;
                    $this->color=$color;
                }

                //destructor
                function __destruct(){
                    echo "The Animals is {$this->name} and the color is
                {$this->color}.<br>";
                }

            }

            //create new object
            $dog  = new animals("Tome","Black");
            $cat = new animals("Kity","Brown");
        ?>
    </body>
</html>