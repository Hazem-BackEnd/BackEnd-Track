<?php


$input=6;

echo "input:"."<br>".$input."<br>";


echo "Output:"."<br>";


for ($i = 1; $i <= $input ; $i++) {
        if($input%$i==0) echo $i."<br>";
}