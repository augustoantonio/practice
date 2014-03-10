<?php

$bar = array ('uno','dos','tres');

var_dump($bar[4]);
echo $bar{0};

function getArray() {
	return array(1, 2, 3);
}

// on PHP 5.4
echo getArray()[5];
