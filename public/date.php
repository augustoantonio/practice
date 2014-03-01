<?php

// checkdate
echo 'checkdate (10,4,1972)   -> ';
var_dump(checkdate(10,4,1972));
echo '</br>';

echo 'checkdate (13,04,1972) -> ';
var_dump(checkdate(13,4,1972));
echo '</br>';

echo 'checkdate (10,40,1972) -> ';
var_dump(checkdate(10,40,1972));
echo '</br>';
echo 'checkdate (12,31,32767) -> ';
var_dump(checkdate(12,31,32767));
echo '</br>';

echo 'checkdate (01,01,32768)-> ';
var_dump(checkdate(1,1,32768));
echo '</br>';

echo 'checkdate (01,01,0)-> ';
var_dump(checkdate(1,1,0));
echo '</br>';

echo 'checkdate (10,-1,1972)-> ';
var_dump(checkdate(10,-1,1972));
echo '</br>';
echo '<hr/>';

// date_default_time_zone_get
echo 'date_default_timezone_get() - > ';
echo date_default_timezone_get();
echo '<hr/>';

echo "date_default_timezone_set('Europe/Lisbon') - > ";
date_default_timezone_set('Europe/Lisbon');
echo date_default_timezone_get();
echo '</br>';

echo "date_default_timezone_set('rica/Los_Angeles') - > ";
if (date_default_timezone_set('rica/Los_Angeles')==null);
echo 'null'.'</br>';

echo 'fijate que se mantiene la anterior -> date_default_timezone_get() - > ';
echo date_default_timezone_get();
echo '</br>';
echo "date_default_timezone_set('America/Los_Angeles') - > ";
date_default_timezone_set('America/Los_Angeles');	
echo date_default_timezone_get();
date_default_timezone_set('UTC');
echo '</br>';

?>