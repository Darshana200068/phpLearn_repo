<html>
    <head></head>
    <body>
        <?php
            class animals {
                //properties
                public $name;
                public $color;

                //constructor
                public function __construct($name,$color){
                    $this->name=$name;
                    $this->color=$color;
                }

                public function intro(){
                    echo "A {$this->name} is a animal and the color of
                     the animal is {$this->color}.";
                }

            }

            class dog extends animals{
                public function message(){
                    echo "Is a dog black or white.";
                }
            }

            //create new object
            $dog = new dog("Tome","Black");

            //get name and color using get method
            $dog->message();
            echo "<br>";
            $dog->intro();
        ?>
    </body>
</html>