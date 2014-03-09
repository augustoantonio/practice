<?php

$a = '1234';
$b = md5($a);
echo $b;
die;




$today = unixtojd();
echo 'unixtojd(); -> el JD de hoy: ';
var_dump($today);
echo '</br>';
echo '<hr/>';

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
echo '<hr/>';

// date_diff
echo 'date_diff es alias de DateTime::diff() - > '.'</br>';
echo "\$dStart = new DateTime('1972-10-04');".'</br>';
echo "\$dEnd  = new DateTime('1972-10-05');".'</br>';
echo "\$dDiff = \$dStart->diff(\$dEnd);".'</br>';
echo "echo \$dDiff->format('%R'); // use for point out relation: smaller/greater".'</br>';
echo "echo \$dDiff->days;".'</br>';

$dStart = new DateTime('1972-10-04');
$dEnd  = new DateTime('1972-10-05');
$dDiff = $dStart->diff($dEnd);
echo $dDiff->format('%R'); // use for point out relation: smaller/greater
echo $dDiff->days;
echo '<hr/>';

// date_format
echo 'date_format es alias de DateTime::format() - > '.'</br>';
echo "\$ddate = new DateTime('1972-10-04');".'</br>';
echo "echo \$ddate->format('d-m-Y H:i:s');"." -> ";
$ddate = new DateTime('1972-10-04');
echo $ddate->format('d-m-Y H:i:s');
echo '</br>';

echo "echo \$ddate->format('y-m-d H:i:');"." -> ";
echo $ddate->format('y-m-d H:i');
echo '</br>';
echo '<hr/>';

// date_get_last_errors alias de DateTime::getLastErrors()
echo"date_get_last_errors alias de DateTime::getLastErrors()".'</br>';
echo "\$date = date_create('asdfasdf');".'</br>';
echo "print_r(date_get_last_errors());".' ->'.'</br>';

$date = date_create('asdfasdf');
echo '<pre>';
print_r(date_get_last_errors());
echo '</pre>'.'</br>';
echo '<hr/>';

// date_interval_create_from_date_string alias de
// DateInterval::createFromDateString()
echo "date_interval_create_from_date_string
	 alias de DateInterval::createFromDateString()".'</br>';
 
echo '<hr/>';
 
// date_offset_get


echo "\$winter = date_create('2010-12-21',
	 timezone_open('America/New_York'));".'</br>';
echo "echo date_offset_get(\$winter); -> ";

$winter = date_create('2010-12-21', timezone_open('America/New_York'));
echo date_offset_get($winter) . "\n";

echo '<hr/>';

// date_offset_get
echo "\$date = new DateTime('1972-10-04');<br/>
echo \$date->getTimestamp(); -> ";
$date = new DateTime('1972-10-04');
echo $date->getTimestamp().'</br>';
echo "print_r(\$date);".'</br>';
echo '<pre>';
print_r($date);
echo '<pre>';
echo '<hr/>';

// getTimeZone
echo "\$tz = \$date->getTimezone();</br>
echo \$tz->getName(); -> ";
$tz = $date->getTimezone();
echo $tz->getName();
echo '<hr/>';

// dateformat

$di = new DateInterval('PT3600S');
echo $di->format('%h:%i:%s').'</br>';
// output will be: "Instead of 0:0:3600 it outputs 1:0:0"

echo '<hr/>';

// getLocation
echo "\$tz = new DateTimeZone(\"Europe/Madrid\");".'</br>';
echo "print_r($tz->getLocation());".'</br>';
echo "print_r(timezone_location_get(\$tz));".'</br>';
$tz = new DateTimeZone("Europe/Madrid");
print_r($tz->getLocation());
echo "print_r(timezone_location_get(\$tz));".'</br>';
print_r(timezone_location_get($tz));

echo '<hr/>';

// getName


echo "".'</br>';
echo "".'</br>';

?>