<?php
error_reporting(E_ALL);
function foo(&$var) { }

foo($a); // $a is "created" and assigned to null
$b = array();
foo($b['b']);
var_dump(array_key_exists('b', $b));
var_dump($b);
die;



$arr1 = array(2, 3);
$arr2 = &$arr1;
$arr2[] = 4; // $arr2 is changed,
// $arr1 is still array(2, 3)
echo '<pre>';
print_r($arr1);
echo '</pre>'.'<br/>';
echo '<pre>';
print_r($arr2);
echo '</pre>'.'<br/>';
die;
$arr3 = &$arr1;
$arr3[] = 4; // now $arr1 and $arr3 are the same


$juices["apple"]["green"] = "good";
echo '<pre>';
print_r($juices);
echo '</pre>'.'<br/>';
die;


// fill an array with all items from a directory
$handle = opendir('.');
while (false !== ($file = readdir($handle))) {
	print_r($file);
	echo '<br/>';
}

closedir($handle);
?>
sort($files);
echo '<br/>';
print_r($files);
die;


$colors = array('red', 'blue', 'green', 'yellow');
print_r($colors);
echo '<br/>';
foreach ($colors as &$color) {
    $color = strtoupper($color);
}
unset($color);
print_r($colors);

die;
class A {
	private $A; // This will become '\0A\0A'
	private $C;
	function __construct()
	{
		$this->C ="ok";
	}
}

class B extends A {
	private $A; // This will become '\0B\0A'
	public $AA; // This will become 'AA'
	
	 function _construct()
	{
			$this->AA = "elb";
	}
}
print_r((array) new A());
echo '<br/>';
die;
var_dump ((array)new A());
echo '<br/>';
var_dump((array) new B());

die;

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// // Correct
// print $arr['fruit'];  // apple
// print $arr['veggie']; // carrot

// Incorrect.  This works but also throws a PHP error of level E_NOTICE because
// of an undefined constant named fruit
//
// // Notice: Use of undefined constant fruit - assumed 'fruit' in...
// print $arr[fruit];   
// define('fruit', 'veggie');
print "Hello {$arr['fruit']}";
print "Hello {$_GET['foo']}";
die;
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
// Simple array:
$array = array(1, 2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
	echo "\nChecking $i: \n";
	echo "Bad: " . $array['$i'] . "\n";
	die;
	echo "Good: " . $array[$i] . "\n";
			echo "Bad: {$array['$i']}\n";
			echo "Good: {$array[$i]}\n";
			}
			die;



// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
	unset($array[$i]);
}
print_r($array);
$array[] = 6;
print_r($array);
die;
$bar = array ('uno','dos','tres');

// var_dump($bar[4]);
// echo $bar{0};
print_r($bar);
die;
function getArray() {
	return array('blanco', 'cuadrado', 'tres');
}

// on PHP 5.4
// echo getArray()[2];
list ($color, $forma, $numero) =getArray();
echo $color.'<br/>';


echo $numero.'<br/>';

echo $forma.'<br/>';