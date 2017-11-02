<?php
require ('RegresiLinier.php');

$x = [
    2000,
    2001,
    2002,
    2003,
    2004,
    2005,
    2006,
    2007,
    2008,
    2009
];

$y = [
    45,
    48,
    51,
    51,
    52,
    54,
    61,
    67,
    69,
    70
];


$regresi = new RegresiLinier($x, $y);

//contoh menampilkan data regresi linear
echo "<textarea style='width:100%; height:300px; '>";
echo "X Variable : \n";
print_r($x);
echo "</textarea>";

echo "<textarea style='width:100%; height:300px; '>";
echo "Y Variable : \n";
print_r($y);
echo "</textarea>";

echo "<textarea style='width:100%; height:300px; '>";
echo "Hasil Analisis Regresi Linear Sederhana : \n";
print_r($regresi->all);
echo "</textarea>";
