<?php

$input=5;

echo "input:"."<br>".$input."<br>";


echo "Output:"."<br>";

$cnt=0;

for ($i = 2; $i <=$input; $i++) {
    if($input % $i==0) $cnt++;
}
echo $cnt==1? "YES":"NO";