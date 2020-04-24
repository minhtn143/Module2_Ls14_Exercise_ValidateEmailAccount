<?php
include "function.php";

isValidEmail('a@gmail.com');
echo "<br>";
isValidEmail('ab@yahoo.com');
echo "<br>";
isValidEmail('abc@hotmail.com');
echo "<br>";
isValidEmail('@gmail.com');
echo "<br>";
isValidEmail('ab@gmail.');
echo "<br>";
isValidEmail('@#abc@gmail.com');
echo "<br>";


isValidAccount('123abc_');
echo "<br>";
isValidAccount('_abc123');
echo "<br>";
isValidAccount('______');
echo "<br>";
isValidAccount('123456');
echo "<br>";
isValidAccount('.@');
echo "<br>";
isValidAccount('12345');
echo "<br>";
isValidAccount('1234_');
echo "<br>";
isValidAccount('abcde');
echo "<br>";