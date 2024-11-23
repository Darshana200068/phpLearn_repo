<html>
    <head></head>
    <body>
        <h1>The Animal Progarm</h1>
        <?php
            class animals {
                //properties
                public $name;
                public $color;

                //methods
                function set_name($name){
                    $this->name=$name;
                }
                function set_color($color){
                    $this->color=$color;
                }
                function get_name(){
                    return $this->name;
                }
                function get_color(){
                    return $this->color;
                }
            }
        ?>
    </body>
</html>