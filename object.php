<html>
    <head></head>
    <body>
        <?php
class Animals
{
    //properties
    public $name;
    public $color;

    //methods
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getColor()
    {
        return $this->color;
    }
}
//create new object
$dog = new Animals();
$cat = new Animals();

//set name and color using setters
$dog->setName('Tome');
$dog->setColor('Black');
$cat->setName('Kity');
$cat->setColor('Brown');

//get names and colors using getters
echo $dog->getName();
echo "<br>";
echo $dog->getColor();
echo "<br>";
echo $cat->getName();
echo "<br>";
echo $cat->getColor();
?>
    </body>
</html>