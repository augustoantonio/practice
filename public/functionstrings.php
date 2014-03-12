<?php

$letters = "/index.php?id=1&abcde('ABCDE\FG')";
$numbers = "1234567890";
echo 'STRINGS'.'<br/>';
echo <<<'TITULO'
$letters = "/index.php?id=1&abcde('ABCDE\FG')";
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
echo 'meta caracteres: . \ + * ? [ ^ ] ( $ )'.'</br>';
echo "quotemeta(\$letters) -> ";
echo quotemeta($letters);
echo '<hr/>';

//bin2hex
echo "echo bin2hex('A'); -> ";
echo bin2hex('A');
echo '<hr/>';

// chop
echo "chop alias de rtrim - Borra los siguientes caracteres del final de un string".'</br>';
echo '" " (ASCII 32 (0x20)), un espacio ordinario.'.'</br>';
echo '"\t" (ASCII 9 (0x09)), un tabulador.'.'</br>';
echo '"\n" (ASCII 10 (0x0A)), una nueva línea (line feed).'.'</br>';
echo '"\r" (ASCII 13 (0x0D)), un retorno de carro.'.'</br>';
echo '"\0" (ASCII 0 (0x00)), el byte NULL.'.'</br>';
echo '"\x0B" (ASCII 11 (0x0B)), un tabulador vertical.'.'</br>';
echo "se puede indicar mascara ->";
echo "chop(\$numbers, '0'); ->";
echo chop($numbers, '0');
echo '</br>';
echo '<hr/>';

// chr
echo "chr() devuelve el caracter ascii correspondiente al código indicado: ";
echo "chr(165); ->";
echo chr(165).'</br>';
echo "ord() devuelve el código del carácter ascii indicado: ";
echo 'ord("¥"); ->';
echo ord("¥");
echo '</br>';
echo '<hr/>';

// chunck_split
echo 'chunk_split($numbers,$chunken = 3); -> ';
$chunked = chunk_split($numbers,$chunken = 3);
echo $chunked.'</br>';
echo 'echo chunk_split($numbers,$chunken=1, $end="a"); ->';
echo chunk_split($numbers,$chunken=1, $end="a").'</br>';
echo '<hr/>';

// convert_cyr_string
echo 'str <- convert_cyr_string ( s$str , s$from , s$to ); conversion entre cirilicos'.'</br>';
echo 's$from y s$to pueden ser
(k - koi8-r, w - windows-1251, i - iso8859-5, a - x-cp866, d - x-cp866, m - x-mac-cyrillic)';
echo '</br>';
echo '<hr/>';

// convert_uuencode y convert_uudecode
ECHO '$uuencodestr = convert_uuencode($numbers); -> ';
$uuencodestr = convert_uuencode($numbers);
echo $uuencodestr;
echo '</br>';
echo'echo convert_uudecode($uuencodestr); - >';
echo convert_uudecode($uuencodestr);
echo '</br>';
echo '<hr/>';

// count_chars
echo '$data = "Two Ts & one F.";'.'<br/>';
echo '$arraycount = count_chars($data, 1); ->'.'<br/>';

$data = "Two Ts & one F.";
$arraycount = count_chars($data, 1);
print_r($arraycount);
echo '</br>';
echo 'devuelve array con el número de repeticiones de cada carácter del string ';
echo 'T->84, " "->32, o ->111 ...'.'<br/>';
echo <<<'eo'
0 - array con el byte-value como key y su frecuencia como value.
1 - solo byte-values con frecuencia mayor que cero.
2 - solo byte-values con frecuencia igual a cero.
3 - un string con caractéres que no se repiten.
4 - un string que contiene los caracters no usados';
eo;
echo '</br>';
echo '$arraycount = count_chars($data, 3); -> ';
$arraycount = count_chars($data, 3);
echo $arraycount;
echo '</br>';
echo '<hr/>';


// sprintf
echo 'printf sprintf sscanf fscanf usan las mismas reglas'.'<br/>';
echo '$n =  32; $u = -32; $c = 65; // ASCII 65 is "A"'.'<br/>';
$n =  32;
$u = -32;
$c = 65; // ASCII 65 is 'A'

// notice the double %%, this prints a literal '%' character
echo 'printf("%b", $n); // binary representation -> ';
printf("%b", $n); // binary representation
echo '</br>';

echo 'printf("%c", $c); -> ';
printf("%c", $c); // print the ascii character, same as chr()
echo ' <- print the ascii character, same as chr()'.'</br>';


echo 'printf("%d", $n); -> ';
printf("%d", $n); // 
echo ' <- standard integer representation'.'</br>';

echo 'printf("%e", $n); -> ';
printf("%e", $n); // scientific notation
echo ' <- notacion cientifica'.'</br>';

echo 'printf("%u", $n); -> ';
printf("%u", $n); // unsigned integer representation of a positive integer
echo ' <- entero sin signo'.'</br>';

echo 'printf("%u", $u); -> ';
printf("%u", $u); // unsigned integer representation of a negative integer
echo ' <- unsigned integer representation of a negative integer'.'</br>';

echo 'printf("%f", $n); -> ';
printf("%f", $n); // floating point representation
echo ' <- punto flotante'.'</br>';

echo 'printf("%o", $n); -> ';
printf("%o", $n); // octal representation
echo ' <- octal'.'</br>';

echo 'printf("%s", $n); -> ';
printf("%s", $n); // string representation
echo ' <- string'.'</br>';

echo 'printf("%x", $n); -> ';
printf("%x", $n); // hexadecimal representation (lower-case)
echo ' <- hexadecimal lower'.'</br>';

echo 'printf("%X", $n); -> ';
printf("%X", $n); // hexadecimal representation (upper-case)
echo ' <- hexadecimal upper'.'</br>';

echo 'printf("%+d", $n); -> ';
printf("%+d", $n); // sign specifier on a positive integer
echo ' <- indicador de signo en positivo'.'</br>';

echo 'printf(" %+d", $u); -> ';
printf("%+d", $u); // sign specifier on a negative integer
echo ' <- indicador de signo en negativo'.'</br>';
echo '<hr/>';

// crc32
echo 'crc32. las instalaciones 32bits devuelven un valor negativo, formatealo  con printf %u';
echo '</br>';
echo '$checksum = crc32("The quick brown fox jumped over the lazy dog.");'.'</br>';
echo 'printf("%u", $checksum); -> ';
$checksum = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u", $checksum);
echo '</br>';
echo '<hr/>';

//explode implode
echo 'explode - implode'.'<br/>';
echo '$cadena = "uno dos tres cuatro";';
echo '</br>';
echo 'explode(" ", $cadena); -> $arraycadena = ';
$cadena = "uno dos tres cuatro";
$arraycadena = explode(" ", $cadena);
print_r($arraycadena);
echo '</br>';
echo 'echo implode(",", $arraycadena); ->';
echo implode(",", $arraycadena).'<br/>';
echo 'si el delimiter es vacio devuelve FALSE. si no está en la cadena devuelve array vacio';
echo '<hr/>';

// fprintf
echo 'if (!(\$da = fopen("fecha.txt", "w"))) return;'.'<br/>';
echo 'fprintf($da, "%04d-%02d-%02d", $anyo, $mes, $dia); - > guarda la salida en el recurso indicado';
echo '</br>';
echo '<hr/>';

// htmlspecialchars
echo 'htmlspecialchars hace que el navegador no interprete las special encontradas en el string'.'<br/>';

echo '$nueva = htmlspecialchars("<a href="test">Test</a>", ENT_QUOTES); -> ';

echo '&lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;'.'<br/>';
echo 'htmlspecialchars_decode hace el proceso inverso'.'<br/>';
echo '<hr/>';

echo 'htmlentities -> es como htmlspecialchars pero con todos los tags html'.'</br>';
$str = "A 'quote' is <b>bold</b>";
echo "A 'quote' is <b>bold</b>".' -> ';  // Produce: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str).'</br>';  // Produce: A &#039;quote&#039; is &lt;b&
echo 'html_entity_decode -> hace lo inverso '.'</br>';


// get_html_translation_table()
echo 'get_html_translation_table() muestra en un array la tabla de traduccion usada estas funciones';
echo '<hr/>';
// nl2br() 

// urlencode()
