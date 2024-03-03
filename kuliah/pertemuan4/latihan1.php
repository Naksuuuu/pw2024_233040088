<?php

echo date("Y-m-d h:i:s");

echo "<br>";

echo date("l, j F Y");

echo "<br>";

$time = time();

echo $time;


echo "<br>";

echo date("l", time() + 60 * 60 * 24 * 100);

echo "<br>";

echo mktime(0,0,0,2,27,2024);

echo "<br>";

echo date("l", mktime(0,0,0,8,13,2005));



