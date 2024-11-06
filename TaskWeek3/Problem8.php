<?php

$input=4;

echo "input:"."<br>".$input."<br>";


echo "Output:"."<br>";

for ($i = 0; $i < $input ; $i++) {
    for ($j = 0; $j <=$i ; $j++) {
        echo "*";
    }
    echo "<br>";
}