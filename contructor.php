<html>
    <head></head>
    <body>
        <center><h2>PHP Constructor</h2></center>
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

                //methods
                function get_name(){
                    return $this->name;
                }
                function get_color(){
                    return $this->color;
                }
            }

            //create new object
            $dog  = new animals("Tome","Black");
            $cat = new animals("Kity","Brown");

            //get name and color using get method
            echo $dog->get_name();
            echo "<br>";
            echo $dog->get_color();
            echo "<br>";
            echo $cat->get_name();
            echo "<br>";
            echo $cat->get_color();
        ?>
    </body>
</html>