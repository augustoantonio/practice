<?php

// unixtojd
$today = unixtojd();
echo 'unixtojd(); -> el JD de hoy: ';
var_dump($today);
echo '</br>';
echo '<hr/>';

// cal_days_in_month
$a = cal_days_in_month(CAL_JULIAN, 10, 1972);
echo "cal_days_in_month(CAL_JULIAN, 10, 1972); -> ";
var_dump($a).'</br>';
// devuelve int 29. num dias que tiene un mes indicando ano, mes y calendario
echo '<hr/>';

// cal_from_jd
$a = cal_from_jd(2441595, CAL_GREGORIAN);
echo "<pre> cal_from_jd (2441595, CAL_GREGORIAN); -> ";
print_r ($a);
echo '</pre>'.'</br>';
echo '<hr/>';

// cal_info
$a = cal_info(CAL_JEWISH);
echo "<pre> cal_info(CAL_JEWISH); -> ";
print_r ($a);
echo '</pre>';
echo '<hr/>';

// cal_to_jd
echo "cal_to_jd(CAL_GREGORIAN, 10, 04, 1972); -> ";
$a = cal_to_jd(CAL_GREGORIAN, 10, 04, 1972);
var_dump($a);
echo '<hr/>';

// easter_date
echo "easter_date(2014); el dia de pascua en JD -> ";
$a = easter_date(2014);
var_dump($a);
echo "haciendole un date format: ".date ("Y-M-d", easter_date(2014));
echo '<hr/>';

// easter_day
echo "easter_days(2014); -> los dias que hay entre el 21 de marzo y pascua: ";
$a = easter_days(2014);
var_dump($a);
echo '<hr/>';

// FrenchToJD
echo "frenchtojd(int \$month, int \$day, int \$year); -> de CAL_FRENCH a int JD";
echo '<hr/>';

// GregorianToJd
echo "gregoriantojd(10, 04, 1972); -> de Gregoriano a int JD";
$a= gregoriantojd(10, 04, 1972);
var_dump($a);
echo '<hr/>';

// JdDayofWeek
echo "jdayofweek(2441595); -> dia de la semana, 0 es domingo -> ";
$a= jddayofweek(2441595);
var_dump($a) ;

echo "</br>"."jdayofweek(2441595, 1); -> en  ingles-gregoriano -> ";
$a= jddayofweek(2441595, 1);
var_dump($a);

echo "</br>"."jdayofweek(2441595, 2); ->  ";
$a= jddayofweek(2441595, 2);
var_dump($a);
echo '<hr/>';

// JDMonthName
echo "jdMonthName(2441595, 0); greg abr   ->  ".jdmonthname(2441595, 0).'</br>';
echo "jdMonthName(2441595, 1); gregoriano ->  ".jdmonthname(2441595, 1).'</br>';
echo "jdMonthName(2441595, 2); julian abr ->  ".jdmonthname(2441595, 2).'</br>';
echo "jdMonthName(2441595, 3); juliano    ->  ".jdmonthname(2441595, 3).'</br>';
echo "jdMonthName(2441595, 4); judio      ->  ".jdmonthname(2441595, 4).'</br>';
echo "jdMonthName(2441595, 5); French     ->  ".jdmonthname(2441595, 5).'</br>';

echo '<hr/>';

// JDToFrench
echo "JDtoFrench(\$today); ->  ";
$a=jdtofrench($today);
var_dump($a);
echo '<hr/>';

// JDToGregorian
echo "JDtoGregorian(2441595); ->  ";
$a=jdtogregorian(2441595);
echo $a;
var_dump($a);
echo '<hr/>';

// JDtojewish
echo "JDtoJewish, JDtoJulian"."</br>"; 
echo "JewishToJD, JulianToJD"."</br>"; 
echo '<hr/>';

//jdtounix
echo "JdtoUnix. Si fuera de 2440588-2465342 devuelve False. jdtounix(2441595)->";
$a = jdtounix(2441595);
echo $a;

echo '<hr/>';

//unixtojd
$today = unixtojd();
echo 'unixtojd(); -> el JD de hoy: ';
var_dump($today);
echo '</br>';
echo '<hr/>';
echo '<hr/>';
?>