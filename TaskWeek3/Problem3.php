<?php


$input=5;

echo "input:"."<br>".$input."<br>";
$arr=[1,8,5,7,5];
for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i]." ";
}
echo "<br>";

echo "Output:"."<br>";

$mx=-1;
for ($j = 0; $j < count($arr); $j++) {
    if($mx < $arr[$j]) $mx=$arr[$j];
}
echo $mx;