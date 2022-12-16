<?php
if(isset($_POST["cr"]))
{
abstract class Animal
{
public $food, $location;
function __construct($food, $location){
$this->food = $food;
$this->location = $location;
}
abstract function make_noise();
abstract function eat();
abstract function sleep();
}
class duck extends Animal
{
public $color;
function __construct($food, $location, $color)
{
$this->food = $food;
$this->location = $location;
$this->color = $color;
}
function make_noise()
{
echo "<br>"."quack";
}
function eat()
{
echo "<br>"."duck eating";
}
function sleep()
{
echo "<br>"."duck sleep";
}
}
class dog extends Animal
{
public $size;

function __construct($food, $location, $size)
{
$this->food = $food;
$this->location = $location;
$this->size = $size;
}
function make_noise()
{
echo "<br>"."woof";
}
function eat()
{
echo "<br>"."dog eating";
}
function sleep()
{
echo "<br>"."dog sleep";
}
}
class sheep extends Animal
{
public $breed;

function __construct($food, $location, $breed)
{
$this->food = $food;
$this->location = $location;
$this->breed = $breed;
}
function make_noise()
{
echo "<br>"."baa";
}
function eat()
{
echo "<br>"."sheep eating";
}
function sleep()
{
echo "<br>"."sheep sleep";
}
}
$class = $_POST["class"];
$food = $_POST["food"];
$location = $_POST["location"];
$third = $_POST["third"];
if($class = 'duck')
{
$object = new duck($food, $location, $third);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->color;
}
if($class = 'dog')
{
$object = new dog($food, $location, $third);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->size;
}
if($class = 'sheep')
{
$object = new sheep($food, $location, $third);
echo "<br>".$object->food;
echo "<br>".$object->location;
echo "<br>".$object->breed;
}
if($class != 'dog' || $class != 'sheep' || $class != 'duck')
{
$object = new duck($food, $location, $third);
}
$object->make_noise();
$object->eat();
$object->sleep();
}
?>