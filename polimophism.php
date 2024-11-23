<html>
    <head></head>
    <body>
        <?php
            class animals {
                //properties
                public $name;
                public $color;

                //constructor
                public function __construct($name , $color){
                    $this->name=$name;
                    $this->color=$color;
                }
                //function intro
                public function intro(){
                    echo "A {$this->name} is a animal and the color of
                     the animal is {$this->color}.";
                }

            }

            class cat extends animals{
                public $weight;
                public function __construct($name ,$color,$weight){
                    $this->name=$name;
                    $this->color=$color;
                    $this->weight=$weight;
                }
                
                //Method Overriding
                public function intro(){
                    echo "A {$this->name} is a animal and the color of
                     the animal is {$this->color},and the weight is {$this->weight} gram.";
                }
            }

            $cat =new cat("Kity","purple","15");
            $cat->intro();
        ?>
    </body>
</html>