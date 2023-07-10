<?php

class Fruit
{
    private $name;
    private $color;
    function setName($value)
    {
        $this->name = $value;
    }
    function setColor($value)
    {
        $this->color = $value;
    }
    function getName()
    {
        return $this->name;
    }
    function getColor()
    {
        return $this->color;
    }
}

$fruit = new Fruit();
$fruit->setName("apple");
$fruit->setColor("red");

echo "Name : " . $fruit->getName();
echo "<br>";
echo "Color : " . $fruit->getColor();
