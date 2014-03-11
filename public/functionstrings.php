<?php

$letters = "abcde?fghij'ABCDE\FGHIJ'";
$numbers = "1234567890";
echo 'STRINGS'.'<br/>';
echo <<<'TITULO'
$letters = "abcde?fghij'ABCDE\FGHIJ'";
$numbers = "1234567890";
TITULO;
echo '<hr/>';

//addcslashes
echo "\$cslashed = addcslashes(\$letters,'a..d') ->";
echo '</br>';
$cslashed = addcslashes($letters,'a..d');
echo $cslashed;
echo '</br>';
echo '<hr/>';
echo "echo stripcslashes('He\\xallo') -> ";
echo stripcslashes('He\xallo');
echo '</br>';

//stripcslashes
echo "stripcslashes(\$cslashed) -> ";
echo stripcslashes($cslashed);
echo '</br>';
echo '<hr/>';

//addslashes
echo "\$slashed = addslashes(\$letters) ->";

$slashed = addslashes($letters);
echo $slashed;
echo '</br>';
echo '<hr/>';

// stripslashes
echo "\$stripped = stripslashes(\$slashed) ->";

$stripped = stripslashes($slashed);
echo $stripped;
echo '</br>';
echo '<hr/>';

// quotemeta




