<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name,$color) {
    $this->name = $name;
    $this->color = $color;
  }
  function get_name()
   {
    return 'Object Name:'.$this->name.' Having Color '. $this->color;
  }

  
}

$apple = new Fruit();
//$banana = new Fruit();
$apple->set_name('Apple','green');
//$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
//echo $banana->get_name();
?>