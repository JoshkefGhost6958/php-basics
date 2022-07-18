<?php
$username = "leaky";
$passwd = "Ghost@558**$";
$host = "localhost";
//i am a comment
#just like python

/*like java and c*/
$color ="white";
echo "i own a ".$color." mercedes benz\n";
echo "Hello world\n";
echo "i am excited to link mysql to html via php on $host\n";
$x = 45;#global scope
$y = 122;
$prod = $x * $y;
$add;
echo "the product of". $x." and ".$y." is:".$prod."\n";
#function to show use of local variables
function myTest() {
    $p = 44;
    //calling a global variable
    global $x;
    $age = $x;
    $GLOBALS['add']=$GLOBALS['x'] + $GLOBALS['y'];
    echo "variable x inside the function is a local variable of value: ".$p;
    echo "The old lady who helped us was ".$age." years old\n";
}
function ppower() {
    static $x = 0;
    echo $x."\n";
    $x++;
}
myTest();
echo "x and Y were added in a function(local scope),their sum is: ".$add;
#ppower();
#ppower();
#ppower();
print "php is fun!\n";
var_dump($x);
class car {
    public $colour;
    public $model;
    public function __construct($colour,$model) {
        $this->colour =$colour;
        $this->model = $model;
    }
    public function message() {
        return "my car is a ".$this->colour." " .$this->model."\n";
    }  
}
$mycar = new car("white","mercedes");
class employee {
    public $name;
    public $id;
    public $role;
    public function __construct($name,$id,$role) {
        $this-> name = $name;
        $this->id = $id;
        $this->role = $role;
    }
    public function details() {
        return "Name: ".$this->name." with User id: ".$this->id." of Dept: ".$this->role."\n";
    }
}
$emp1 = new employee("John",00667,"sotware egineer");
echo $emp1->details();
#echo $mycar->message();
#to output length of a string
#$greeting = "Goodmorning Africa";
#echo strlen($username);
#count words in a string
#echo str_word_count($greeting);
#echo strpos($greeting,"Africa");
#cast float to int
$sink = 445.889;
$int_cast = (int)$sink;
#echo $int_cast;
#echo str_replace("Africa","Kenya",$greeting);
define("GREETING","Goodmorning Africa\n");
#case-insensitive
#echo GREETING;
function welcome() {
    echo GREETING."\n";
}
#welcome();
$r = 100;
$b = "170";
var_dump($r !== $b);
?>