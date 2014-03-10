<?php
$str = "A 'quote' is <b>bold</b>";

// Produce: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str).'<br/>';

// Produce: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);
die;

$str ='abcde';

$result = substr($str, -1);
var_dump($result);
die;


error_reporting(E_ALL);
$foo = 1 + "10.5";                // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
$foo = 1 + "bob-1.3e3";           // $foo is integer (1)
$foo = 1 + "bob3";                // $foo is integer (1)
$fooi = 1 + "1 Small Pigs";       // $foo is integer (11)
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2)
$foo = "10.0 pigs " + 1;          // $foo is float (11)
$foo = "10.0 pigs " + 1.0;        // $foo is float (11) 


echo "\$foo==$fooi; type is " . gettype ($fooi) . "<br />\n";

die;

class StrValTest
{
	public function __toString()
	{
		return __CLASS__;
	}
}

// Prints 'StrValTest'
echo strval(new StrValTest);

die;
$str = 'abc';
echo'el 1'.'<br/>';
var_dump($str['1']);
echo '<br/>';
var_dump(isset($str['1']));
echo '<br/>';

echo 'el 1.0'.'<br/>';
var_dump($str['1.0']);
var_dump(isset($str['1.0']));

echo '<br/>';
echo 'el x'.'<br/>';
var_dump($str['c']);
var_dump(isset($str['c']));

echo '<br/>';
echo 'el 1x'.'<br/>';
var_dump($str['1x']);
var_dump(isset($str['1x']));
die;

// Show all errors

class foo {
	var $bar = 'abcdi';
}

$foo = new foo();
$bar = 'bar';
echo strlen($foo->bar);
// $last = $str[strlen($foo->bar)-1];
echo $foo->bar[strlen($foo->bar)-1];

die;
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n".'<br/>';
echo "{$foo->$baz[1]}\n";

die;
class food
{
	var $bobada;
	var $bar;
	var $great;
	var $name;

	function foo()
	{
		$this->bobada = 'tonteria';
		$this->bar = array('uno', array ('dosuno','dosdos'), 'tres'=>'cuatro');
		$this->great = 'fantastic';
		$this->name = 'fred';
	}
}

$foo = new foo();


// echo <<<EOT
// My name is $foo->name. I am printing some $foo->bobada.
// Now, I am printing some {$foo->bar[1]}.
// This should print a capital 'A': \x41
// EOT;


// // Won't work, outputs: This is { fantastic}
// echo "This is { $foo->great}";

// // Works, outputs: This is fantastic
// echo "This is {$foo->great}";
// echo "This is {$foo->great}";


// Works, quoted keys only work using the curly brace syntax
echo "This works: {$foo->bar[tres]}";


// Works
echo "This works: {$foo->bar[1][0]}";

// This is wrong for the same reason as $foo[bar] is wrong  outside a string.
// In other words, it will still work, but only because PHP first looks for a
// constant named foo; an error of level E_NOTICE (undefined constant) will be
// thrown.
// echo "This is wrong: {$arr[foo][3]}";

// // Works. When using multi-dimensional arrays, always use braces around arrays
// // when inside of strings
// echo "This works: {$arr['foo'][3]}";

// // Works.
// echo "This works: " . $arr['foo'][3];

// echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var named $foo->name: {${$foo->name}}";

echo "This is the value of the var named by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}";
?>
