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
var_dump($regresi->all);


//contoh menampilkan data perkiraan berdasarkan variabel x
var_dump($regresi->forecast(2020));
