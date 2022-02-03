<?php

class Horse
{
	public $name = "";
	public $breed = "";
	public $color = "";
	public $height = "";
    public $weight = "";
    public $sex = "";
    public $owner = "";

    public function printHorse()
    {
        $info = "The Horse is";

        if($this->name)
        {
            $info .= " named {$this->name}";
        }
        if($this->breed)
        {
            $info .= ", is a {$this->breed} breed";
        }
        if($this->color)
        {
            $info .= ", of the color {$this->color}";
        }
        if($this->height)
        {
            $info .= ", {$this->height}cm tall";
        }
        if($this->weight)
        {
            $info .= ", weights {$this->weight}kg";
        }
        if($this->sex)
        {
            $info .= " and is a {$this->sex}";
        }
        
        return "{$info}.<br>";
    }

    public function setOwner()
    {
        $info = "The owner for";

        if($this->name)
        {
            $info .= " {$this->name}";
        }
    
        if($this->owners)
        {
            $info .= " are {$this->owners}, {$this->owner}";
        }
        else
        {
            $info .= " are {$this->owner}";
        }

        return "{$info}.<br>";
    }

}

$horseOne = new Horse();
$horseOne->name = "Spirit";
$horseOne->breed = "Arabic";
$horseOne->color = "Light brown";
$horseOne->height = "150";
$horseOne->weight = "300";
$horseOne->sex = "Male";
$horseOne->owners = "Andrea";
$horseOne->owner = "Tova";

$horseTwo = new Horse();
$horseTwo->name = "Forest";
$horseTwo->breed = "Arabic";
$horseTwo->color = "Dark brown";
$horseTwo->height = "165";
$horseTwo->weight = "340";
$horseTwo->sex = "Female";
$horseTwo->owner = "Tova";

echo "<pre>";
echo "<h2>Horse One</h2>";
echo $horseOne->printHorse();

echo "<h2>Horse Two</h2>";
echo $horseTwo->printHorse();

echo"<h2>Owners</h2>";
echo $horseOne->setOwner();
echo $horseTwo->setOwner();
echo "</pre>";

?>